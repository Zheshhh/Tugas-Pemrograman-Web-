<nav class="navbar navbar-expand-lg bg-body-tertiary rounded">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><strong>InventarisApp</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="{{route('tempat.index')}}">Tempat</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('category.index')}}">Category</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('barang.index')}}">Barang</a>
        </li>
      </ul>
    </div>
  </div>
</nav>