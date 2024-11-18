@extends('dashboard.layout.main')

@section('container')
    <header class="page-header page-header-dark pb-10"
        style="background-image: url('{{ asset('img/header.png') }}'); background-size: cover; background-position: center;">
        <div class="container-xl px-4">
            <div class="page-header-content pt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto mt-4">
                        <h1 class="page-header-title">
                            <div class="page-header-icon"><i data-feather="activity"></i></div>
                            My Chat
                        </h1>
                        <div class="page-header-subtitle">Ini adalah Halaman Chat Kamu!</div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <div class="container-xl px-4 mt-n10">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Chat Room</h5>
            </div>
            <div class="card-body chat-body">
                <div class="chat-box" id="chatBox">
                    {{-- @foreach ($chats as $chat) --}}
                    <div class="message admin">
                        {{-- <div class="message {{ $chat->is_admin ? 'admin' : 'user' }}"> --}}
                        <strong>
                            {{-- {{ $chat->is_admin ? 'Admin' : $chat->user->name }}: --}}
                            Lorem ipsum dolor sit amet consectetur.
                        </strong>
                        <p>
                            {{-- {{ $chat->message }} --}}
                            Lorem ipsum dolor sit amet.
                        </p>
                        <span class="message-time">
                            {{-- {{ $chat->created_at->format('H:i') }} --}}
                            16:40
                        </span>
                    </div>
                    <div class="message user">
                        {{-- <div class="message {{ $chat->is_admin ? 'admin' : 'user' }}"> --}}
                        <strong>
                            {{-- {{ $chat->is_admin ? 'Admin' : $chat->user->name }}: --}}
                            Lorem ipsum dolor sit amet consectetur.
                        </strong>
                        <p>
                            {{-- {{ $chat->message }} --}}
                            Lorem ipsum dolor sit amet.
                        </p>
                        <span class="message-time">
                            {{-- {{ $chat->created_at->format('H:i') }} --}}
                            16:40
                        </span>
                    </div>
                    {{-- @endforeach --}}
                </div>
            </div>
            <div class="card-footer">
                {{-- <form action="{{ route('chat.store') }}" method="POST" class="d-flex align-items-center"> --}}
                <div class="d-flex align-items-center">

                    @csrf
                    <input type="text" name="message" class="form-control me-2" placeholder="Type your message..."
                        required>
                    <button type="submit" class="btn btn-primary">Send</button>
                </div>
                {{-- </form> --}}
            </div>
        </div>
    </div>
    <style>
        .chat-body {
            max-height: 400px;
            overflow-y: auto;
            padding: 10px;
            background-color: #f8f9fa;
        }

        .chat-box {
            display: flex;
            flex-direction: column;
        }

        .message {
            margin-bottom: 10px;
            padding: 10px;
            border-radius: 10px;
            position: relative;
            max-width: 75%;
        }

        .message.admin {
            background-color: #d1ecf1;
            align-self: flex-start;
            color: #0c5460;
        }

        .message.user {
            background-color: #cce5ff;
            align-self: flex-end;
            color: #004085;
        }

        .message-time {
            font-size: 0.8rem;
            color: #6c757d;
            position: absolute;
            bottom: 5px;
            right: 10px;
        }
    </style>
@endsection
