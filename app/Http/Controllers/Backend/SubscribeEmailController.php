<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SubscribeEmailRequest;
use App\Repository\SubscribeEmailInterface;
use Illuminate\Http\Request;

class SubscribeEmailController extends Controller
{
    private $subscribeEmailRepository;

    public function __construct(SubscribeEmailInterface $subscribeEmailRepository)
    {
        $this->subscribeEmailRepository = $subscribeEmailRepository;
    }

    public function index()
    {
        return $this->subscribeEmailRepository->index();
    }

    public function create()
    {
        return $this->subscribeEmailRepository->create();
    }

    public function store(SubscribeEmailRequest $request)
    {
        return $this->subscribeEmailRepository->store($request);
    }

    public function show($id)
    {
        return $this->subscribeEmailRepository->show($id);
    }

    public function edit($id)
    {
        return $this->subscribeEmailRepository->edit($id);
    }

    public function update(SubscribeEmailRequest $request, $id)
    {
        return $this->subscribeEmailRepository->update($request, $id);
    }

    public function destroy($id)
    {
        return $this->subscribeEmailRepository->delete($id);
    }
}
