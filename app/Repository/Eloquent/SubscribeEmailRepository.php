<?php


namespace App\Repository\Eloquent;

use App\Models\SubscribeEmail;
use App\Repository\SubscribeEmailInterface;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class SubscribeEmailRepository extends BaseRepository implements SubscribeEmailInterface
{
    public function __construct(SubscribeEmail $model)
    {
        parent::__construct($model, 'subscribe_emails');
    }

    public function index()
    {
        $subscribeEmails = DB::table('subscribe_emails')->select(['id', 'email', 'phone', 'full_name'])->paginate(15);
        return view('backend.' . $this->module . '.index', compact('subscribeEmails'));
    }

    public function create()
    {
        return view('backend.' . $this->module . '.create');
    }

    public function store($request)
    {
        $this->model->create($request->all());
        Mail::to($request->email)->send(new \App\Mail\SubscribeEmail($request->full_name, 'Created'));
        session()->flash('success','Subscribe Email Added Successfully');
        return redirect()->route($this->module . '.index');
    }

    public function show($id)
    {
        $subscribeEmail = $this->find($id);
        return view('backend.' . $this->module . '.show', compact('subscribeEmail'));

    }

    public function edit($id)
    {
        $subscribeEmail = $this->edit($id);
        return view('backend.' . $this->module . '.show', compact('subscribeEmail'));
    }

    public function update($request, $id)
    {
        $this->find($id)->update($request->all());
        Mail::to($request->email)->send(new \App\Mail\SubscribeEmail($request->full_name, 'Updated'));
        session()->flash('success','Subscribe Email Updated Successfully');
        return redirect()->route($this->module . '.index');
    }

    public function delete($id)
    {
        $this->find($id)->delete();
        session()->flash('success', 'Subscribe Email Deleted Successfully');
        return redirect()->route($this->module . '.index');
    }
}
