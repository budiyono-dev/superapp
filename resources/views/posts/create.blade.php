@extends('layouts.admin')
@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-2xl p-8 space-y-6 bg-white rounded shadow">
        <h2 class="text-2xl font-bold text-center text-gray-800 mb-4">Create Post</h2>
        @if(session('success'))
            <div class="mb-4 text-green-600">{{ session('success') }}</div>
        @endif
        <form method="POST" action="{{ route('posts.store') }}">
            @csrf
            <div class="mb-4">
                <label for="title" class="block mb-1 text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div class="mb-4">
                <label for="content" class="block mb-1 text-sm font-medium text-gray-700">Content</label>
                <textarea id="content" name="content" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" rows="10" required></textarea>
            </div>
            <button type="submit" class="w-full py-2 font-semibold text-white bg-blue-600 rounded hover:bg-blue-700">Create Post</button>
        </form>
    </div>
</div>
@endsection
@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/ckeditor4@4.22.1/ckeditor.js"></script>
<script>
    CKEDITOR.replace('content', {
        versionCheck: false,
        height: 350,
        removeButtons: '',
        toolbar: [
            { name: 'document', items: [ 'Source', '-', 'NewPage', 'Preview', 'Print' ] },
            { name: 'clipboard', items: [ 'Cut', 'Copy', 'Paste', 'Undo', 'Redo' ] },
            { name: 'styles', items: [ 'Format', 'Font', 'FontSize' ] },
            { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Underline', 'Strike', '-', 'RemoveFormat' ] },
            { name: 'colors', items: [ 'TextColor', 'BGColor' ] },
            { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
            { name: 'links', items: [ 'Link', 'Unlink' ] },
            { name: 'insert', items: [ 'Image', 'Table', 'HorizontalRule', 'SpecialChar' ] },
            { name: 'tools', items: [ 'Maximize' ] }
        ]
    });
</script>
@endpush
