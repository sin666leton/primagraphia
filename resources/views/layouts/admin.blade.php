<div>
    @include('admin.layouts.inc.sidebar')
    <div class="main-wrapper">
        @include('admin.layouts.inc.header')
        <div class="page-header">
            <div>
                <h1 class="page-title">{{ $title }}</h1>
                <p class="page-subtitle">{{ $subtitle }}</p>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.html"
                            class="text-decoration-none text-muted-green">Home</a></li>
                    <li class="breadcrumb-item active text-main" aria-current="page">Blank Page</li>
                </ol>
            </nav>
        </div>
        @if (session('success'))
            <div class="alert alert-success alert-dismissible  mb-3">
                <i class="bi bi-check-circle-fill me-2"></i>
                <strong>Success:</strong> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session('error'))
            <div class="alert alert-warning alert-dismissible mb-3">
                <i class="bi bi-exclamation-circle-fill me-2"></i>
                <strong>Error :</strong> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible mb-3">
                <i class="bi bi-exclamation-triangle-fill me-2"></i>
                <strong>Peringatan:</strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                Terdapat beberapa kesalahan pengisian form:
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card p-4 border-light shadow-sm h-100">
            {{ $slot }}
        </div>
    </div>
</div>
{{-- QUILL --}}
<!-- <script src="https://cdn.jsdelivr.net/npm/quill@2.0.3/dist/quill.js"></script> -->
<!-- <script>
    const quill = new Quill('#editor', {
        theme: 'snow'
    });
    quill.on('text-change', function(delta, oldDelta, source) {
        document.querySelector("textarea[name='description']").value = quill.root.innerHTML;
        console.log("textarea", quill.root.innerHTML)
    });
</script> -->