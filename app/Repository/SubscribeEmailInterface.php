<?php


namespace App\Repository;


interface SubscribeEmailInterface
{
    public function index();

    public function create();

    public function store($request);

    public function show($id);

    public function edit($id);

    public function update($request, $id);

    public function delete($id);
}
