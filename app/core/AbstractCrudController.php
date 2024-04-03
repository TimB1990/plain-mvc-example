<?php

abstract class AbstractCrudController extends Controller
{
    // list records from database
    abstract public function index($view);

    // show create view
    abstract public function create($view);

    // store entity in database
    abstract public function store();

    // show edit view
    abstract public function edit($view);

    // update entity in database
    abstract public function update($id);

    // put entity to trash
    abstract public function trash($id);

    // list records that have been trashed
    abstract public function trashed($view);

    // restore entity from trash
    abstract public function restore($id);

    // delete entity from database
    abstract public function destroy($id);
}
