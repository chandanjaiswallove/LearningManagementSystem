<div class="col-lg-9">
  <div class="settings-wrapper-dashed p-4">
    <h5 class="title m-3">New Admin Settings</h5>

    <!-- FORM START -->
    <div class="card border-0 shadow-sm">
      <div class="card-body">
        <form id="adminForm">
          <div class="mb-3">
            <label class="form-label">Director Name</label>
            <input type="text" class="form-control custom-input rounded" id="directorAdmin" name="directorAdmin" oninput="changetoTitle()">
          </div>

          <div class="mb-3">
            <label class="form-label">Institute Name</label>
            <input type="text" class="form-control custom-input rounded" id="instituteName" name="instituteName" oninput="trimName()">
          </div>

          <div class="mb-3">
            <label class="form-label">Admin Email</label>
            <input type="email" class="form-control custom-input rounded" id="directorEmail" name="directorEmail">
          </div>

          <div class="mb-3">
            <label class="form-label">Password</label>
            <input type="text" class="form-control custom-input rounded" id="adminPassword" name="adminPassword">
          </div>

          <div class="mb-3">
            <label class="form-label">Contact</label>
            <input type="text" class="form-control custom-input rounded" id="adminContact" name="adminContact"
              onkeypress="if(this.value.length === 10) return false;">
          </div>

          <div class="mb-4">
            <label class="form-label">Secret UID</label>
            <input type="text" class="form-control custom-input rounded" id="secretUID"
              value="<?php echo strtoupper(random_string('alnum', 3)); ?>" readonly>
          </div>

          <button type="submit" class="custom-btn">Create Creaditianals</button>
        </form>
      </div>
    </div>
    <!-- FORM END -->
  </div>
</div>

<!-- SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<style>
  /* Input Styling */
  .custom-input {
    border: 1px solid #BBB1F2 !important;
    border-radius: 8px;
    padding: 10px 12px;
    transition: all 0.3s ease-in-out;
    border: rounded;
  }

  .custom-input:focus {
    border-color: #553cdf !important;
    box-shadow: 0 0 0 0.25rem rgba(85, 60, 223, 0.25);
  }
.custom-btn {
  display: flex;
  justify-content: center;   /* Horizontal center */
  align-items: center;       /* Vertical center */
  width: 100%;
  height: 40px;              /* Fixed height for vertical centering */
  background-color: #553cdf;
  color: white;
  border: 1px solid #553cdf;
  font-size: 17px;           /* Increased text size */
  text-align: center;
  text-decoration: none;
  border-radius: 5px;
  transition: all 0.3s ease;
  cursor: pointer;
}
.custom-btn:hover {
  background-color: white;
  color: #553cdf;
}
</style>

<script>
  var directorName = document.getElementById('directorAdmin');
  var instName = document.getElementById('instituteName');
  var secretCode = document.getElementById('secretUID');
  var registrationDate = new Date();
  var month = String(registrationDate.getMonth() + 1).padStart(2, '0');
  var year = String(registrationDate.getFullYear()).slice(-2);

  function trimName() {
    instName.value = instName.value.replace(/\w\S*/g, function (txt) {
      return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
    });
    secretCode.value = instName.value.substring(0, 3).toUpperCase() + "ADM" + month + year;
  }

  function changetoTitle() {
    directorName.value = directorName.value.replace(/\w\S*/g, function (txt) {
      return txt.charAt(0).toUpperCase() + txt.substr(1).toLowerCase();
    });
  }

  document.getElementById('adminForm').addEventListener('submit', function (e) {
    e.preventDefault();

    const dName = directorName.value.trim();
    const iName = instName.value.trim();
    const email = document.getElementById('directorEmail').value.trim();
    const pass = document.getElementById('adminPassword').value.trim();
    const contact = document.getElementById('adminContact').value.trim();

    if (!dName || !iName || !email || !pass || !contact) {
      Swal.fire({
        icon: 'error',
        title: 'Error',
        text: 'Please fill all fields correctly!',
        confirmButtonColor: '#553cdf'
      });
      return;
    }

    Swal.fire({
      icon: 'success',
      title: 'Success',
      html: `Admin <strong>${dName}</strong> registered successfully!`,
      confirmButtonColor: '#553cdf'
    });
  });
</script>
