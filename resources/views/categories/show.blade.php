<?php

use \App\Category;

public function store(Request $request)
{
    $categories = new Category();
    $categories->name = $request->input('name');
    $categories->description = $request->input('description');

    $categories->save();
    return redirect()->back();

}
?>
