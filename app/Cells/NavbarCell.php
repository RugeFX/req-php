<?php

namespace App\Cells;

use CodeIgniter\View\Cells\Cell;

class NavbarCell extends Cell
{
    public function render(): string
    {
        return $this->view('navbar', ['user_info' => session()->get("user_info")]);
    }
}
