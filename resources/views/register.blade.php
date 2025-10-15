<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Registrasi</title>
    <style>
        body {
            font-family: "Segoe UI", sans-serif;
            background: #f3f4f6;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: white;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
        }

        h2 {
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        label {
            font-weight: bold;
            color: #444;
        }

        input[type="text"],
        input[type="password"],
        input[type="date"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 6px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
        }

        button {
            width: 100%;
            background-color: #f05340;
            color: white;
            padding: 12px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 600;
            transition: background 0.3s;
        }

        button:hover {
            background-color: #f05340;
        }

        .alert {
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 14px;
        }

        .alert-success {
            background-color: #d1e7dd;
            color: #f82e18ff;
            border: 1px solid #badbcc;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #842029;
            border: 1px solid #f5c2c7;
        }

        a {
            color: #6a0dad;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .footer-link {
            text-align: center;
            margin-top: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Form Registrasi</h2>

        {{-- Pesan sukses/error --}}
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if (session('error'))
            <div class="alert alert-error">{{ session('error') }}</div>
        @endif

        {{-- Validasi error --}}
        @if ($errors->any())
            <div class="alert alert-error">
                <ul>
                    @foreach ($errors->all() as $err)
                        <li>{{ $err }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('register.submit') }}">
            @csrf

            <label>Nama:</label>
            <input type="text" name="nama" value="{{ old('nama') }}" required>

            <label>Alamat:</label>
            <textarea name="alamat" rows="3" required>{{ old('alamat') }}</textarea>

            <label>Tanggal Lahir:</label>
            <input type="date" name="tgl_lahir" value="{{ old('tgl_lahir') }}" required>

            <label>Username:</label>
            <input type="text" name="username" value="{{ old('username') }}" required>

            <label>Password:</label>
            <input type="password" name="password" required>

            <label>Confirm Password:</label>
            <input type="password" name="confirm_password" required>

            <button type="submit">Daftar</button>
        </form>

        <div class="footer-link">
            <a href="{{ route('auth.login') }}">Sudah punya akun? Login di sini</a>
        </div>
    </div>
</body>
</html>