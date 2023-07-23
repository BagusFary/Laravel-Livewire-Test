<div>
    <div class="mb-2 mt-4">
      <input type="number" class="form-control" wire:model="barang">
    </div>
      <button class="btn btn-success" wire:click="tambah">+ Tambah</button>
      @if ($barang >= 1)
      <button class="btn btn-danger" wire:click="kurang">- Kurang</button>
      @endif
</div>
