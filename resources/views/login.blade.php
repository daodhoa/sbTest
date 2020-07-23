<html lang="en">
<head>
    <title>Sign In</title>
</head>
<body>
    <h3>Sign In</h3>
    @if(session()->has('loginError'))
        <p style="color: red">{{ session()->get('loginError') }}</p>
    @endif
    @if(session()->has(['attemptUser', 'otp']))
        <p>Please enter OTP we have just sent to your email: {{ session()->get('attemptUser')->email }}</p>
    @endif
    <table>
        @if(session()->has(['attemptUser', 'otp']))
            <form action="{{ route('login.verify') }}" method="post">
                @csrf
                <tr>
                    <td>OTP: </td>
                    <td>
                        <label>
                            <input type="text" name="token" pattern="[0-9]{6}">
                        </label>
                    </td>
                    <td><button>Verify</button></td>
                </tr>
            </form>
        @else
            <form action="{{ route('login.attempt') }}" method="post">
                @csrf
                <tr>
                    <td>username: </td>
                    <td>
                        <label>
                            <input type="text" name="username">
                        </label>
                    </td>
                    <td>
                        <button>Sign In</button>
                    </td>
                </tr>
                @if(isset($errors))
                    @foreach($errors->get('username') as $message)
                        <tr><td>&nbsp;</td><td style="color: red">{{ $message }}</td><td></td></tr>
                    @endforeach
                @endif
            </form>
        @endif
    </table>
</body>
</html>
