<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"/>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <style>
    :root {
      --primary:#553cdf;
      --soft-border:#dcd8ff;
    }
    body{
      background:#f9f9ff;
      min-height:100vh;
      display:flex;align-items:center;justify-content:center;
      padding:16px;
      margin:0;
    }
    .auth-container{
      width:100%;
      max-width:920px;
      border:1px solid var(--soft-border);
      border-radius:10px;
      box-shadow:0 4px 16px rgba(0,0,0,.08);
      overflow:hidden;
      display:flex;
      flex-direction:row;
      background:#fff;
    }
    .auth-left,.auth-right{
      flex:1;
      padding:32px 36px;
      box-sizing:border-box;
    }
    .auth-left{
      background:#f3f4ff;
      padding:20px; 
      display:flex; 
      align-items:center; 
      justify-content:center;
    }
    .auth-illustration{
      width:100%;
      height:100%;
      object-fit:cover;
      border-radius:10px;
      animation:fadeIn .8s ease both;
    }
    @keyframes fadeIn{from{opacity:0;transform:translateY(12px)}to{opacity:1;transform:none}}
    .btn-primary{background:var(--primary)!important;border-color:var(--primary)!important;transition:.25s}
    .btn-primary:hover{background:#fff!important;color:var(--primary)!important;border:1px solid var(--primary)!important}
    .btn-outline-secondary{border-color:var(--soft-border)}
    .btn-outline-secondary:hover{background:#fff;color:var(--primary);border-color:var(--primary)}
    .form-control:focus,.form-select:focus{
      border-color:var(--primary);
      box-shadow:0 0 0 .2rem rgba(85,60,223,.2)
    }
    .switch-link{color:var(--primary);cursor:pointer}
    .hidden{display:none!important}
    .brand-logo{width:110px}
    .title{color:var(--primary); margin:8px 0 4px}
    .fine-text{font-size:.875rem}
    @media (max-width: 768px) {
      .auth-container{flex-direction:column;max-width:100%;}
      .auth-left{order:-1;padding:18px;}
      .auth-right{padding:20px;}
      .brand-logo{width:80px}
    }
  </style>
</head>
<body>

<div class="auth-container">
  <div class="auth-left">
    <img class="auth-illustration"
         src="https://st2.depositphotos.com/2171279/9264/i/450/depositphotos_92644432-stock-photo-businesswoman-typing-on-laptop-at.jpg"
         alt="Illustration"/>
  </div>

  <div class="auth-right bg-white">

    <!-- LOGIN -->
    <div id="loginForm">
      <div class="text-center mb-3">
        <img class="brand-logo mb-1" src="<?php echo base_url('assets/images/logo/logo-1.svg'); ?>" alt="Logo">
        <h4 class="title">Login to Your Account 👋</h4>
      </div>
      <form id="loginFormEl" novalidate>
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" id="loginUsername" placeholder="Enter username" required>
          <div class="invalid-feedback">Username is required.</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Email Address</label>
          <input type="email" class="form-control" id="loginEmail" placeholder="Enter email" required>
          <div class="invalid-feedback">Enter a valid email address.</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="loginPassword" placeholder="Enter password" required>
            <button type="button" class="btn btn-outline-secondary rounded-end" onclick="togglePassword('loginPassword', this)">Show</button>
          </div>
          <div class="invalid-feedback">Password is required.</div>
        </div>
        <div class="d-flex justify-content-between align-items-center mb-3">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="rememberCheck">
            <label class="form-check-label" for="rememberCheck">Remember me</label>
          </div>
          <span class="switch-link" onclick="showForgot()">Forgot Password?</span>
        </div>
        <button class="btn btn-primary w-100 mb-3" type="submit">Login</button>
        <p class="text-center mt-2">Don't have an account? <span class="switch-link" onclick="showSignup()">Sign Up</span></p>
      </form>
    </div>

    <!-- SIGNUP -->
    <div id="signupForm" class="hidden">
      <div class="text-center mb-3">
        <img class="brand-logo mb-1" src="<?php echo base_url('assets/images/logo/logo-1.svg'); ?>" alt="Logo">
        <h4 class="title">Create Your Account 🚀</h4>
      </div>
      <form id="signupFormEl" novalidate>
        <div class="mb-3">
          <label class="form-label">Full Name</label>
          <input type="text" class="form-control" id="signupName" placeholder="Enter full name" required>
          <div class="invalid-feedback">Full name is required.</div>
        </div>

        <div class="mb-3">
          <label class="form-label">Email Address</label>
          <input type="email" class="form-control" id="signupEmail" placeholder="Enter email" required>
          <div class="invalid-feedback">Enter a valid email address.</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Phone Number</label>
          <input type="tel" class="form-control" id="signupPhone" placeholder="Enter phone number" required>
          <div class="invalid-feedback">Phone number is required.</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Password</label>
          <div class="input-group">
            <input type="password" class="form-control" id="signupPassword" placeholder="Create password" required>
            <button type="button" class="btn btn-outline-secondary rounded-end" onclick="togglePassword('signupPassword', this)">Show</button>
          </div>
          <div class="invalid-feedback">Password must be strong (6+ chars, 1 uppercase, 1 number, 1 special char).</div>
        </div>
        <div class="mb-3">
          <label class="form-label">Username</label>
          <input type="text" class="form-control" id="signupUsername" placeholder="Choose a username" required>
          <div class="invalid-feedback">Username is required.</div>
        </div>
        <div class="mb-3">
          <label class="form-label">State</label>
          <select class="form-select" id="signupState" required>
            <option value="" disabled selected>Select your state</option>
            <option>Andhra Pradesh</option>
            <option>Arunachal Pradesh</option>
            <option>Assam</option>
            <option>Bihar</option>
            <option>Chhattisgarh</option>
            <option>Goa</option>
            <option>Gujarat</option>
            <option>Haryana</option>
            <option>Himachal Pradesh</option>
            <option>Jharkhand</option>
            <option>Karnataka</option>
            <option>Kerala</option>
            <option>Madhya Pradesh</option>
            <option>Maharashtra</option>
            <option>Manipur</option>
            <option>Meghalaya</option>
            <option>Mizoram</option>
            <option>Nagaland</option>
            <option>Odisha</option>
            <option>Punjab</option>
            <option>Rajasthan</option>
            <option>Sikkim</option>
            <option>Tamil Nadu</option>
            <option>Telangana</option>
            <option>Tripura</option>
            <option>Uttar Pradesh</option>
            <option>Uttarakhand</option>
            <option>West Bengal</option>
          </select>
          <div class="invalid-feedback">Please select your state.</div>
        </div>
        <button class="btn btn-primary w-100" type="submit">Sign Up</button>
        <p class="text-center mt-3">Already have an account? <span class="switch-link" onclick="showLogin()">Login</span></p>
      </form>
    </div>

    <!-- FORGOT STEP 1: Send OTP -->
    <div id="forgotStep1" class="hidden">
      <div class="text-center mb-2">
        <img class="brand-logo mb-1" src="<?php echo base_url('assets/images/logo/logo-1.svg'); ?>" alt="Logo">
        <h4 class="title">Forgot Password 🔑</h4>
        <p class="text-muted fine-text mb-0">Enter your registered email to get OTP.</p>
      </div>
      <form id="forgotFormEl" novalidate>
        <div class="mb-3 mt-2">
          <label class="form-label">Email Address</label>
          <input type="email" class="form-control" id="forgotEmail" placeholder="Enter email" required>
          <div class="invalid-feedback">Enter a valid email address.</div>
        </div>
        <button class="btn btn-primary w-100" type="submit">Send OTP</button>
        <p class="text-center mt-3">Back to <span class="switch-link" onclick="showLogin()">Login</span></p>
      </form>
    </div>

    <!-- FORGOT STEP 2: Verify OTP -->
    <div id="otpVerifyStep" class="hidden">
      <div class="text-center mb-2">
        <img class="brand-logo mb-1" src="<?php echo base_url('assets/images/logo/logo-1.svg'); ?>" alt="Logo">
        <h4 class="title">Verify OTP 🔐</h4>
        <p class="text-muted fine-text mb-0">Enter the OTP sent to your email.</p>
      </div>
      <form id="otpVerifyFormEl" novalidate>
        <div class="mb-3 mt-2">
          <label class="form-label">OTP</label>
          <input type="text" class="form-control" id="verifyOtp" maxlength="6" placeholder="Enter 6‑digit OTP" required>
          <div class="invalid-feedback">Enter a valid 6‑digit OTP.</div>
        </div>
        <button class="btn btn-primary w-100" type="submit">Verify OTP</button>
        <p class="text-center mt-3">Back to <span class="switch-link" onclick="showLogin()">Login</span></p>
      </form>
    </div>

 <!-- FORGOT STEP 3: Reset Password -->
<div id="forgotStep3" class="hidden">
  <div class="text-center mb-2">
    <img class="brand-logo mb-1" src="<?php echo base_url('assets/images/logo/logo-1.svg'); ?>" alt="Logo">
    <h4 class="title">Reset Password 🔐</h4>
  </div>
  <form id="resetFormEl" novalidate>
    <div class="mb-3">
      <label class="form-label">New Password</label>
      <div class="input-group">
        <input type="password" class="form-control" id="resetPassword" placeholder="Enter new password" required>
        <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('resetPassword', this)">Show</button>
      </div>
      <div class="invalid-feedback">Password must be strong (6+ chars, 1 uppercase, 1 number, 1 special char).</div>
    </div>
    <div class="mb-3">
      <label class="form-label">Confirm Password</label>
      <div class="input-group">
        <input type="password" class="form-control" id="resetConfirmPassword" placeholder="Confirm new password" required>
        <button type="button" class="btn btn-outline-secondary" onclick="togglePassword('resetConfirmPassword', this)">Show</button>
      </div>
      <div class="invalid-feedback">Passwords do not match.</div>
    </div>
    <button class="btn btn-primary w-100" type="submit">Reset Password</button>
  </form>
</div>

  </div>
</div>

<script>
  const emailRx = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;
  const passRx  = /^(?=.*[A-Z])(?=.*\d)(?=.*[^A-Za-z0-9]).{6,}$/;

  function togglePassword(id, btn){
    const inp = document.getElementById(id);
    if(inp.type === 'password'){ inp.type = 'text'; btn.textContent='Hide'; }
    else{ inp.type = 'password'; btn.textContent='Show'; }
  }

  function showSection(sectionId){
    ['loginForm','signupForm','forgotStep1','otpVerifyStep','forgotStep3'].forEach(id=>{
      document.getElementById(id).classList.add('hidden');
    });
    document.getElementById(sectionId).classList.remove('hidden');
  }

  function showSignup(){ showSection('signupForm'); }
  function showLogin(){ showSection('loginForm'); }
  function showForgot(){ showSection('forgotStep1'); }

  // LOGIN
  document.getElementById('loginFormEl').addEventListener('submit', function(e){
    e.preventDefault();
    const u = document.getElementById('loginUsername');
    const e1 = document.getElementById('loginEmail');
    const p = document.getElementById('loginPassword');
    let ok = true;
    if(!u.value.trim()){u.classList.add('is-invalid');ok=false;} else u.classList.remove('is-invalid');
    if(!emailRx.test(e1.value)){e1.classList.add('is-invalid');ok=false;} else e1.classList.remove('is-invalid');
    if(!p.value){p.classList.add('is-invalid');ok=false;} else p.classList.remove('is-invalid');
    if(!ok){
      Swal.fire('Error','Please fill all fields correctly.','error');
      return;
    }
    Swal.fire('Success',`Welcome back, ${u.value}!`,'success');
  });

  // SIGNUP
  document.getElementById('signupFormEl').addEventListener('submit', function(e){
  e.preventDefault();
  const n = document.getElementById('signupName');
  const u = document.getElementById('signupUsername');
  const e1 = document.getElementById('signupEmail');
  const ph = document.getElementById('signupPhone');
  const p = document.getElementById('signupPassword');
  const st = document.getElementById('signupState');
  let ok = true;

  if(!n.value.trim()){n.classList.add('is-invalid'); ok=false;} else n.classList.remove('is-invalid');
  if(!u.value.trim()){u.classList.add('is-invalid'); ok=false;} else u.classList.remove('is-invalid');
  if(!emailRx.test(e1.value)){e1.classList.add('is-invalid'); ok=false;} else e1.classList.remove('is-invalid');
  if(!ph.value.trim()){ph.classList.add('is-invalid'); ok=false;} else ph.classList.remove('is-invalid');

  if (!p.value.trim()) {
    p.classList.add('is-invalid');
    ok = false;
    Swal.fire({
      icon: 'error',
      title: 'Password Required',
      text: 'Password field cannot be empty.'
    });
  } else if (!passRx.test(p.value)) {
    p.classList.add('is-invalid');
    ok = false;
    Swal.fire({
      icon: 'error',
      title: 'Weak Password',
      html: 'Password must be:<br>• At least 6 characters<br>• 1 uppercase letter<br>• 1 number<br>• 1 special character'
    });
  } else {
    p.classList.remove('is-invalid');
  }

  if(!st.value){st.classList.add('is-invalid'); ok=false;} else st.classList.remove('is-invalid');

  if(!ok){
    return;
  }

  Swal.fire('Success','Account created successfully! You can now log in.','success');
  setTimeout(showLogin,1500);
});

  // FORGOT Step 1 → Send OTP email
  document.getElementById('forgotFormEl').addEventListener('submit', function(e){
    e.preventDefault();
    const e1 = document.getElementById('forgotEmail');
    if(!emailRx.test(e1.value)){
      e1.classList.add('is-invalid');
      Swal.fire({icon:'error',title:'Error',text:'Enter valid email address.'});
      return;
    }
    e1.classList.remove('is-invalid');
    Swal.fire({icon:'success',title:'Success',text:'OTP sent to your email.'});
    setTimeout(()=> showSection('otpVerifyStep'),1200);
  });

  // FORGOT Step 2 → OTP verification
  document.getElementById('otpVerifyFormEl').addEventListener('submit', function(e){
    e.preventDefault();
    const otp = document.getElementById('verifyOtp');
    if(!/^\d{6}$/.test(otp.value)){
      otp.classList.add('is-invalid');
      Swal.fire({icon:'error',title:'Error',text:'Enter valid 6‑digit OTP.'});
      return;
    }
    otp.classList.remove('is-invalid');
    Swal.fire({icon:'success',title:'Success',text:'OTP verified. Now you can reset password.'});
    setTimeout(()=> showSection('forgotStep3'),1200);
  });

  // FORGOT Step 3 → Reset Password
document.getElementById('resetFormEl').addEventListener('submit', function(e){
  e.preventDefault();
  const p = document.getElementById('resetPassword');
  const cp = document.getElementById('resetConfirmPassword');
  let ok = true;

  if (!p.value || !passRx.test(p.value)) {
    p.classList.add('is-invalid');
    ok = false;
    Swal.fire({
      icon: 'error',
      title: 'Weak Password',
      html: 'Password must be:<br>• At least 6 characters<br>• 1 uppercase letter<br>• 1 number<br>• 1 special character'
    });
  } else {
    p.classList.remove('is-invalid');
  }

  if (!cp.value || p.value !== cp.value) {
    cp.classList.add('is-invalid');
    ok = false;
    Swal.fire('Error', 'Passwords do not match.', 'error');
  } else {
    cp.classList.remove('is-invalid');
  }

  if (!ok) return;

  Swal.fire({
    icon: 'success',
    title: 'Success',
    text: 'Password reset successfully!'
  });

  setTimeout(showLogin, 1500);
});


</script>
</body>
</html>
