@extends('layouts.blog')
@section('content')
    <div class="px-2">
        <h1 class="mb-6 border-b-2 text-2xl font-semibold dark:border-b-indigo-900 dark:text-white">Bài viết mới</h1>
    </div>
    <post-list v
        :data="[{ thumbnail: 'https://images.unsplash.com/photo-1500835556837-99ac94a94552?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHJhdmVsfGVufDB8fDB8fHww',
            title: 'title', description: 'description', tags: ['Laravel', '.NET', 'Java'] },
            { thumbnail: 'https://images.unsplash.com/photo-1500835556837-99ac94a94552?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHJhdmVsfGVufDB8fDB8fHww',
            title: 'title', description: 'description', tags: ['Laravel', '.NET', 'Java'] },
            { thumbnail: 'https://images.unsplash.com/photo-1500835556837-99ac94a94552?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHJhdmVsfGVufDB8fDB8fHww',
            title: 'title', description: 'description', tags: ['Laravel', '.NET', 'Java'] },
            { thumbnail: 'https://images.unsplash.com/photo-1500835556837-99ac94a94552?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHJhdmVsfGVufDB8fDB8fHww',
            title: 'title', description: 'description', tags: ['Laravel', '.NET', 'Java'] },
            { thumbnail: 'https://images.unsplash.com/photo-1500835556837-99ac94a94552?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHJhdmVsfGVufDB8fDB8fHww',
            title: 'title', description: 'description', tags: ['Laravel', '.NET', 'Java'] },
            { thumbnail: 'https://images.unsplash.com/photo-1500835556837-99ac94a94552?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8dHJhdmVsfGVufDB8fDB8fHww',
            title: 'title', description: 'description', tags: ['Laravel', '.NET', 'Java'] }]" /></post-list>
@endsection
