<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/images/fav.png'); ?>">

  <!-- SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    body {
      background: #f9f9ff;
      color: #000;
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 16px;
      margin: 0;
    }

    .auth-container {
      width: 100%;
      max-width: 920px;
      border: 1px solid #dcd8ff;
      border-radius: 10px;
      box-shadow: 0 4px 16px rgba(0, 0, 0, .08);
      overflow: hidden;
      display: flex;
      flex-direction: row;
      background: #fff;
    }

    .auth-left,
    .auth-right {
      flex: 1;
      padding: 32px 36px;
      box-sizing: border-box;
    }

    .auth-left {
      background: #f3f4ff;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .auth-illustration {
      width: 100%;
      height: 100%;
      border-radius: 8px;
      object-fit: cover;
    }

    .btn-primary {
      background: #553cdf !important;
      border-color: #553cdf !important;
    }

    .btn-primary:hover {
      background: #fff !important;
      color: #553cdf !important;
      border: 1px solid #553cdf !important
    }

    .switch-link {
      color: #553cdf;
      cursor: pointer
    }

    .hidden {
      display: none !important
    }

    .brand-logo {
      width: 110px
    }

    .title {
      color: #553cdf;
      margin: 8px 0 4px
    }

    @media (max-width: 768px) {
      .auth-container {
        flex-direction: column;
        max-width: 100%
      }

      .auth-left {
        order: -1
      }
    }

    /* ✅ Fix role dropdown (force open downward) */
    .form-select {
      position: relative;
    }

    select.form-select:focus {
      z-index: 1051;
    }
  </style>
</head>

<body>

  <div class="auth-container">
    <!-- Left: Image -->
    <div class="auth-left">
      <img id="sideImage" class="auth-illustration"
        src="https://st2.depositphotos.com/2171279/9264/i/450/depositphotos_92644432-stock-photo-businesswoman-typing-on-laptop-at.jpg"
        alt="Illustration" />
    </div>

    <!-- Right: Login + Forgot -->
    <div class="auth-right bg-white">

      <!-- LOGIN -->
      <div id="loginForm">
        <div class="text-center mb-3">
          <img class="brand-logo mb-1" src="<?php echo base_url('assets/images/logo/logo-1.svg'); ?>" alt="Logo">
          <h4 class="title">Login to Your Account 👋</h4>
        </div>
        <form id="loginFormEl" novalidate>
          <div class="mb-3">
            <label class="form-label">Unique ID</label>
            <input type="text" class="form-control" id="uniqueID" placeholder="Enter unique ID" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Role</label>
            <select class="form-select" id="loginRole" required>
              <option value="" disabled selected>Select Role</option>
              <option value="assistant">Assistant</option>
              <option value="teacher">Teacher</option>
              <option value="admin">Admin</option>
            </select>
          </div>
          <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" id="loginEmail" placeholder="Enter email" required>
          </div>
          <div class="mb-3">
            <label class="form-label">Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="loginPassword" placeholder="Enter password" required>
              <button type="button" class="btn btn-outline-secondary rounded-end"
                onclick="togglePassword('loginPassword', this)">Show</button>
            </div>
          </div>
          <div class="d-flex justify-content-between align-items-center mb-3">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" id="rememberCheck">
              <label class="form-check-label" for="rememberCheck">Remember me</label>
            </div>
            <span class="switch-link" onclick="showForgot()">Forgot Password?</span>
          </div>
          <button class="btn btn-primary w-100 mb-3" type="submit">Login</button>
        </form>
      </div>

      <!-- FORGOT STEP 1 -->
      <div id="forgotStep1" class="hidden">
        <div class="text-center mb-2">
          <img class="brand-logo mb-1" src="<?php echo base_url('assets/images/logo/logo-1.svg'); ?>" alt="Logo">
          <h4 class="title">Forgot Password 🔑</h4>
        </div>
        <form id="forgotFormEl" novalidate>
          <div class="mb-3 mt-2">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" id="forgotEmail" placeholder="Enter email" required>
          </div>
          <button class="btn btn-primary w-100" type="submit">Send OTP</button>
          <p class="text-center mt-3">Back to <span class="switch-link" onclick="showLogin()">Login</span></p>
        </form>
      </div>

      <!-- FORGOT STEP 2: OTP Verify -->
      <div id="otpVerifyStep" class="hidden">
        <div class="text-center mb-2">
          <img class="brand-logo mb-1" src="<?php echo base_url('assets/images/logo/logo-1.svg'); ?>" alt="Logo">
          <h4 class="title">Verify OTP</h4>
        </div>
        <form id="otpVerifyForm" novalidate>
          <div class="mb-3 mt-2">
            <label class="form-label">OTP</label>
            <input type="text" inputmode="numeric" maxlength="6" class="form-control" id="otpCodeVerify"
              placeholder="Enter 6-digit OTP" required>
          </div>
          <button class="btn btn-primary w-100" type="submit">Verify OTP</button>
        </form>
      </div>

      <!-- FORGOT STEP 3: Reset Password -->
      <div id="resetPasswordStep" class="hidden">
        <div class="text-center mb-2">
          <img class="brand-logo mb-1" src="<?php echo base_url('assets/images/logo/logo-1.svg'); ?>" alt="Logo">
          <h4 class="title">Reset Password</h4>
        </div>
        <form id="resetPasswordForm" novalidate>
          <div class="mb-3">
            <label class="form-label">New Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="resetPassword" placeholder="New password" required>
              <button type="button" class="btn btn-outline-secondary"
                onclick="togglePassword('resetPassword', this)">Show</button>
            </div>
          </div>
          <div class="mb-3">
            <label class="form-label">Confirm New Password</label>
            <div class="input-group">
              <input type="password" class="form-control" id="resetConfirm" placeholder="Confirm password" required>
              <button type="button" class="btn btn-outline-secondary"
                onclick="togglePassword('resetConfirm', this)">Show</button>
            </div>
          </div>
          <button class="btn btn-primary w-100" type="submit">Reset Password</button>
        </form>
      </div>

    </div>
  </div>

  <!-- ✅ Inside <script> tag -->
  <script>
    // Password show/hide
    function togglePassword(id, btn) {
      const inp = document.getElementById(id);
      inp.type = inp.type === 'password' ? 'text' : 'password';
      btn.textContent = inp.type === 'password' ? 'Show' : 'Hide';
    }

    // Switch forms
    function showForgot() {
      document.getElementById("loginForm").classList.add("hidden");
      document.getElementById("forgotStep1").classList.remove("hidden");
      document.getElementById("otpVerifyStep").classList.add("hidden");
      document.getElementById("resetPasswordStep").classList.add("hidden");
    }

    function showLogin() {
      document.getElementById("forgotStep1").classList.add("hidden");
      document.getElementById("otpVerifyStep").classList.add("hidden");
      document.getElementById("resetPasswordStep").classList.add("hidden");
      document.getElementById("loginForm").classList.remove("hidden");
    }

    // Regex
    const emailRx = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
    const passRx = /^(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9]).{8,}$/;

    // ✅ Login Validation (SweetAlert हटाया गया)
    document.getElementById("loginFormEl").addEventListener("submit", function (e) {
      e.preventDefault();

      let uniqueID = document.getElementById("uniqueID").value.trim();
      let role = document.getElementById("loginRole").value;
      let email = document.getElementById("loginEmail").value.trim();
      let password = document.getElementById("loginPassword").value.trim();

      if (uniqueID === "" || role === "" || !emailRx.test(email) || !passRx.test(password)) {
        return; // ❌ Validation fail → कुछ नहीं होगा
      }

      // ✅ अब यहां पर redirect या backend call लगाना है (SweetAlert नहीं चलेगा)
      console.log("Login successful", { uniqueID, role, email, password });
      // window.location.href = "your-dashboard-url";  <-- यहां redirect कर सकते हो
    });

    // ✅ Forgot Step 1: Send OTP
    document.getElementById("forgotFormEl").addEventListener("submit", function (e) {
      e.preventDefault();
      let email = document.getElementById("forgotEmail").value.trim();

      if (!emailRx.test(email)) {
        Swal.fire({ icon: 'error', title: 'Invalid Email', text: 'Please enter a valid registered email!' });
        return;
      }

      Swal.fire({
        icon: 'success',
        title: 'OTP Sent 📩',
        text: 'We sent a 6-digit OTP to ' + email,
        confirmButtonText: 'OK'
      }).then(() => {
        document.getElementById("forgotStep1").classList.add("hidden");
        document.getElementById("otpVerifyStep").classList.remove("hidden");
      });
    });

    // ✅ OTP Verify
    document.getElementById("otpVerifyForm").addEventListener("submit", function (e) {
      e.preventDefault();
      let otp = document.getElementById("otpCodeVerify").value.trim();

      if (!/^\d{6}$/.test(otp)) {
        Swal.fire({ icon: 'error', title: 'Invalid OTP', text: 'OTP must be a 6-digit number!' });
        return;
      }

      Swal.fire({
        icon: 'success',
        title: 'OTP Verified ✅',
        text: 'OTP verified successfully! Now reset your password.',
        confirmButtonText: 'Continue'
      }).then(() => {
        document.getElementById("otpVerifyStep").classList.add("hidden");
        document.getElementById("resetPasswordStep").classList.remove("hidden");
      });
    });

    // ✅ Reset Password
    document.getElementById("resetPasswordForm").addEventListener("submit", function (e) {
      e.preventDefault();
      let pass = document.getElementById("resetPassword").value.trim();
      let confirm = document.getElementById("resetConfirm").value.trim();

      if (!passRx.test(pass)) {
        Swal.fire({
          icon: 'error',
          title: 'Weak Password',
          html: 'Password must contain:<br>✔ At least 8 characters<br>✔ 1 uppercase letter<br>✔ 1 number<br>✔ 1 special character'
        });
        return;
      }
      if (pass !== confirm) {
        Swal.fire({ icon: 'error', title: 'Password Mismatch', text: 'Confirm password must match new password!' });
        return;
      }

      Swal.fire({
        icon: 'success',
        title: 'Password Reset ✅',
        text: 'Your password has been reset successfully!',
        confirmButtonText: 'Back to Login'
      }).then(() => {
        showLogin();

        // Clear fields
        document.getElementById("forgotEmail").value = '';
        document.getElementById("otpCodeVerify").value = '';
        document.getElementById("resetPassword").value = '';
        document.getElementById("resetConfirm").value = '';
      });
    });
  </script>


</body>

</html>
