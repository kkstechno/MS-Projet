<html>
<head>
    <link href="{{ asset('assets/css/@fortawesome/fontawesome-free/css/all.css') }}" rel="stylesheet" type="text/css">
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendors/css/account-verification.css')}}" >
</head>
<body>

<div class="account-verification">
    <table class="account-verification__table">
        <tr>
            <td class="text-center">
                <img class="logo" src="{{asset('assets/img/logo-red-black.png')}}" alt="InfyOm Logo">
            </td>
        </tr>
        <tr>
            <td>
                <hr class="divider"/>
            </td>
        </tr>
        <tr>
            <td>
                <p>Dear {{ucfirst($data['username'])}},</p>
                <p>Click the link below to activate your account.</p>
            </td>
        </tr>
        <tr>
            <td class="text-center">
                <a href="{{$data['link']}}" class="verification-btn">
                    <strong>Activate your account</strong>
                </a>
            </td>
        </tr>
        <tr>
            <td>
                <p>Thank you for using InfyTracker!</p>
            </td>
        </tr>
        <tr>
            <td>
                <hr class="divider"/>
            </td>
        </tr>
    </table>
</div>
</body>
</html>
