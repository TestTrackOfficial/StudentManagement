<?php

namespace Canete\App\Core;

interface Crud {
    public function create();
    public function read();
    public function update();
    public function delete();
}