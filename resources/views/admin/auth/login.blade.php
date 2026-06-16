<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Admin Login - Nuvana</title>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
      background: linear-gradient(135deg, #252628ff 0%, #26034aff 100%);
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
    }

    .login-container {
      width: 100%;
      max-width: 440px;
    }

    .login-card {
      background: white;
      border-radius: 16px;
      padding: 48px 40px;
      box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
      animation: fadeInUp 0.6s ease-out;
    }

    @keyframes fadeInUp {
      from {
        opacity: 0;
        transform: translateY(30px);
      }

      to {
        opacity: 1;
        transform: translateY(0);
      }
    }

    .logo {
      text-align: center;
      margin-bottom: 40px;
    }

    .logo h1 {
      font-size: 28px;
      font-weight: 700;
      color: #333;
    }

    .form-group {
      margin-bottom: 24px;
    }

    .form-group label {
      display: block;
      margin-bottom: 8px;
      font-weight: 500;
      color: #333;
      font-size: 14px;
    }

    .input-group {
      position: relative;
    }

    .input-icon {
      position: absolute;
      left: 14px;
      top: 50%;
      transform: translateY(-50%);
      color: #999;
    }

    .password-toggle {
      position: absolute;
      right: 14px;
      top: 50%;
      transform: translateY(-50%);
      cursor: pointer;
      color: #999;
      background: none;
      border: none;
      padding: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      transition: color 0.2s;
    }

    .password-toggle:hover {
      color: #667eea;
    }

    .form-control {
      width: 100%;
      padding: 12px 16px 12px 42px;
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      font-size: 15px;
      transition: all 0.3s;
      font-family: inherit;
    }

    .form-control:focus {
      outline: none;
      border-color: #667eea;
      box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .form-control.is-invalid {
      border-color: #dc2626;
    }

    .invalid-feedback {
      color: #dc2626;
      font-size: 12px;
      margin-top: 6px;
      display: block;
    }

    .btn-login {
      width: 100%;
      padding: 14px;
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: white;
      border: none;
      border-radius: 8px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      transition: transform 0.2s, box-shadow 0.2s;
      margin-top: 8px;
    }

    .btn-login:hover {
      transform: translateY(-2px);
      box-shadow: 0 10px 20px rgba(102, 126, 234, 0.3);
    }

    .btn-login:active {
      transform: translateY(0);
    }

    .alert {
      padding: 14px 16px;
      border-radius: 8px;
      margin-bottom: 24px;
      font-size: 14px;
      animation: slideIn 0.3s ease-out;
    }

    @keyframes slideIn {
      from {
        opacity: 0;
        transform: translateX(-10px);
      }

      to {
        opacity: 1;
        transform: translateX(0);
      }
    }

    .alert-danger {
      background-color: #fee2e2;
      color: #dc2626;
      border-left: 4px solid #dc2626;
    }

    .alert-success {
      background-color: #d1fae5;
      color: #059669;
      border-left: 4px solid #059669;
    }

    /* Loading state */
    .btn-login.loading {
      opacity: 0.7;
      cursor: not-allowed;
    }

    /* Responsive */
    @media (max-width: 480px) {
      .login-card {
        padding: 32px 24px;
      }
    }
  </style>
</head>

<body>
  <div class="login-container">
    <div class="login-card">
      <div class="logo">
        <h1>Login into Nuvana</h1>
      </div>

      @if(session('error') || $errors->any())
        <div class="alert alert-danger">
          @if(session('error'))
            {{ session('error') }}
          @endif
          @if($errors->any())
            <ul style="margin: 0; padding-left: 20px;">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          @endif
        </div>
      @endif

      <form method="POST" action="{{ route('admin.login.submit') }}" id="loginForm">
        @csrf
        <div class="form-group">
          <label for="login">Email, Username or Phone</label>
          <div class="input-group">
            <svg class="input-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
              <circle cx="12" cy="7" r="4"></circle>
            </svg>
            <input id="login" type="text" class="form-control @error('login') is-invalid @enderror" name="login"
              value="{{ old('login') }}" required autofocus placeholder="Enter your email, username or phone">
          </div>
          @error('login')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <div class="input-group">
            <svg class="input-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
              stroke-width="2">
              <rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect>
              <path d="M7 11V7a5 5 0 0 1 10 0v4"></path>
            </svg>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
              name="password" required autocomplete="current-password" placeholder="Enter your password">
            <button type="button" class="password-toggle" id="togglePassword">
              <svg id="eyeIcon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                stroke-width="2">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg>
            </button>
          </div>
          @error('password')
            <span class="invalid-feedback">{{ $message }}</span>
          @enderror
        </div>

        <button type="submit" class="btn-login" id="loginBtn">
          Sign In
        </button>
      </form>
    </div>
  </div>

  <script>
    // Password visibility toggle
    const togglePassword = document.getElementById('togglePassword');
    const passwordInput = document.getElementById('password');
    const eyeIcon = document.getElementById('eyeIcon');

    togglePassword.addEventListener('click', function () {
      // Toggle password type
      const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
      passwordInput.setAttribute('type', type);

      // Toggle eye icon
      if (type === 'text') {
        eyeIcon.innerHTML = `
          <path d="M17.94 17.94A10.07 10.07 0 0 1 12 20c-7 0-11-8-11-8a18.45 18.45 0 0 1 5.06-5.94M9.9 4.24A9.12 9.12 0 0 1 12 4c7 0 11 8 11 8a18.5 18.5 0 0 1-2.16 3.19m-6.72-1.07a3 3 0 1 1-4.24-4.24"></path>
          <line x1="1" y1="1" x2="23" y2="23"></line>
        `;
      } else {
        eyeIcon.innerHTML = `
          <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
          <circle cx="12" cy="12" r="3"></circle>
        `;
      }
    });

    // Form submission with loading state
    document.getElementById('loginForm').addEventListener('submit', function (e) {
      const submitBtn = document.getElementById('loginBtn');
      submitBtn.classList.add('loading');
      submitBtn.textContent = 'Signing In...';
      submitBtn.disabled = true;
    });

    // Remove loading state if back button is pressed
    window.addEventListener('pageshow', function () {
      const submitBtn = document.getElementById('loginBtn');
      submitBtn.classList.remove('loading');
      submitBtn.textContent = 'Sign In';
      submitBtn.disabled = false;
    });
  </script>
</body>

</html>
