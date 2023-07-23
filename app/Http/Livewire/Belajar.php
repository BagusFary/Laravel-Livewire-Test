<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Belajar extends Component
{
    public $nama = "Bagus Fary Ananta";
    public $barang = 0;

    public function render()
    {
        return view('livewire.belajar');
    }

    public function tambah()
    {
        $this->barang++;
    }

    public function kurang()
    {
        $this->barang--;
    }
    
}
