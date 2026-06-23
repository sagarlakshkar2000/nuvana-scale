@extends('layouts.admin')

@section('content')
  <div class="settings-header">
    <div class="settings-header-content">
      <h1 class="settings-title">
        <i class="fas fa-cog"></i> General Settings
      </h1>
      <p class="settings-subtitle">Manage dynamic contact details, social media URLs, and other global settings here.
        These values are cached and load instantly on the frontend.</p>
    </div>
  </div>

  @if(session('success'))
    <div class="alert alert-success">
      <i class="fas fa-check-circle"></i>
      {{ session('success') }}
    </div>
  @endif

  @if($errors->any())
    <div class="alert alert-danger">
      <i class="fas fa-exclamation-circle"></i>
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <form action="{{ route('admin.settings.update') }}" method="POST" id="settings-form">
    @csrf
    <div class="row ">

      <!-- Phone Numbers Section -->
      <div class="col-12 col-md-6">
        <div class="settings-card">
          <div class="card-header">
            <div class="card-header-left">
              <i class="fas fa-phone-alt card-icon"></i>
              <div>
                <h3 class="card-title">Phone Numbers</h3>
                <p class="card-description">Add multiple phone numbers with custom icons</p>
              </div>
            </div>
          </div>

          <div class="card-body">
            <div id="phones-container" class="fields-container">
              @php $phones = old('phones', $setting->phones ?? []); @endphp
              @foreach($phones as $index => $phone)
                <div class="field-row">
                  <div class="field-group field-value">
                    <label class="field-label">Phone Number</label>
                    <input type="text" name="phones[{{ $index }}][value]" value="{{ $phone['value'] ?? '' }}"
                      placeholder="+91 98765 43210" required class="form-control">
                  </div>
                  <button type="button" class="btn-remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              @endforeach
            </div>
            <button type="button" class="btn-add"
              onclick="addRow('phones-container', 'phones', 'fa-solid fa-phone', 'Phone Number')">
              <i class="fas fa-plus"></i> Add Phone Number
            </button>
          </div>
        </div>
      </div>

      <!-- WhatsApp Numbers Section -->
      <div class="col-12 col-md-6">
        <div class="settings-card">
          <div class="card-header">
            <div class="card-header-left">
              <i class="fab fa-whatsapp card-icon whatsapp-icon"></i>
              <div>
                <h3 class="card-title">WhatsApp Number</h3>
                <p class="card-description">Add your primary WhatsApp number</p>
              </div>
            </div>
          </div>

          <div class="card-body">
            <div class="field-row" style="margin-bottom: 0;">
              <div class="field-group field-value">
                <label class="field-label">WhatsApp Number</label>
                @php $whatsappValue = old('whatsapp', $setting->whatsapps[0]['value'] ?? ''); @endphp
                <input type="text" name="whatsapp" value="{{ $whatsappValue }}" placeholder="+91 98765 43210"
                  class="form-control">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Email Addresses Section -->
      <div class="col-12 col-md-6">
        <div class="settings-card">
          <div class="card-header">
            <div class="card-header-left">
              <i class="fas fa-envelope card-icon email-icon"></i>
              <div>
                <h3 class="card-title">Email Addresses</h3>
                <p class="card-description">Add multiple email addresses with custom icons</p>
              </div>
            </div>
          </div>

          <div class="card-body">
            <div id="emails-container" class="fields-container">
              @php $emails = old('emails', $setting->emails ?? []); @endphp
              @foreach($emails as $index => $email)
                <div class="field-row">
                  <div class="field-group field-value">
                    <label class="field-label">Email Address</label>
                    <input type="email" name="emails[{{ $index }}][value]" value="{{ $email['value'] ?? '' }}"
                      placeholder="contact@example.com" required class="form-control">
                  </div>
                  <button type="button" class="btn-remove" title="Remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              @endforeach
            </div>
            <button type="button" class="btn-add"
              onclick="addRow('emails-container', 'emails', 'fa-solid fa-envelope', 'Email Address', 'email')">
              <i class="fas fa-plus"></i> Add Email Address
            </button>
          </div>
        </div>
      </div>

      <!-- Social Media Section -->
      <div class="col-12 col-md-6">
        <div class="settings-card">
          <div class="card-header">
            <div class="card-header-left">
              <i class="fas fa-share-alt card-icon social-icon"></i>
              <div>
                <h3 class="card-title">Social Media Links</h3>
                <p class="card-description">Add URLs for your specific social media profiles</p>
              </div>
            </div>
          </div>

          <div class="card-body">
            @php $socials = old('social_media', $setting->social_media ?? []); @endphp

            <div class="fields-container">
              <!-- Facebook -->
              <div class="field-row">
                <div class="field-group" style="flex: 0 0 40px; text-align: center; font-size: 24px; color: #1877F2;">
                  <i class="fa-brands fa-facebook"></i>
                </div>
                <div class="field-group field-value">
                  <label class="field-label">Facebook URL</label>
                  <input type="url" name="facebook" value="{{ $socials['facebook'] ?? '' }}"
                    placeholder="https://facebook.com/..." class="form-control">
                </div>
              </div>

              <!-- Instagram -->
              <div class="field-row">
                <div class="field-group" style="flex: 0 0 40px; text-align: center; font-size: 24px; color: #E4405F;">
                  <i class="fa-brands fa-instagram"></i>
                </div>
                <div class="field-group field-value">
                  <label class="field-label">Instagram URL</label>
                  <input type="url" name="instagram" value="{{ $socials['instagram'] ?? '' }}"
                    placeholder="https://instagram.com/..." class="form-control">
                </div>
              </div>

              <!-- X (Twitter) -->
              <div class="field-row">
                <div class="field-group" style="flex: 0 0 40px; text-align: center; font-size: 24px; color: #000000;">
                  <i class="fa-brands fa-x-twitter"></i>
                </div>
                <div class="field-group field-value">
                  <label class="field-label">X (Twitter) URL</label>
                  <input type="url" name="x" value="{{ $socials['x'] ?? '' }}" placeholder="https://x.com/..."
                    class="form-control">
                </div>
              </div>

              <!-- LinkedIn -->
              <div class="field-row">
                <div class="field-group" style="flex: 0 0 40px; text-align: center; font-size: 24px; color: #0A66C2;">
                  <i class="fa-brands fa-linkedin"></i>
                </div>
                <div class="field-group field-value">
                  <label class="field-label">LinkedIn URL</label>
                  <input type="url" name="linkedin" value="{{ $socials['linkedin'] ?? '' }}"
                    placeholder="https://linkedin.com/..." class="form-control">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Form Actions -->
      <div class="col-12">
        <div class="form-actions">
          <button type="reset" class="btn btn-secondary">
            <i class="fas fa-undo"></i> Reset
          </button>
          <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Save Settings
          </button>
        </div>
      </div>
    </div>
  </form>

  <script>
    function checkMaxLimit(containerId) {
      const container = document.getElementById(containerId);
      const rows = container.querySelectorAll('.field-row');
      const addButton = container.nextElementSibling; // The Add button right after container

      if (rows.length >= 3) {
        if (addButton && addButton.classList.contains('btn-add')) {
          addButton.style.display = 'none';
        }
      } else {
        if (addButton && addButton.classList.contains('btn-add')) {
          addButton.style.display = 'flex';
        }
      }
    }

    function addRow(containerId, fieldName, defaultIcon, placeholder, inputType = 'text') {
      const container = document.getElementById(containerId);
      const rows = container.querySelectorAll('.field-row');

      if (rows.length >= 3) {
        alert('Maximum limit of 3 reached.');
        return;
      }

      const index = container.children.length;

      const row = document.createElement('div');
      row.className = 'field-row';
      row.style.opacity = '0';
      row.style.transform = 'translateY(-10px)';
      row.style.animation = 'slideIn 0.3s ease forwards';

      row.innerHTML = `
                                    <div class="field-group field-value">
                                      <label class="field-label">${placeholder}</label>
                                      <input type="${inputType}" name="${fieldName}[${index}][value]" value="" placeholder="${placeholder}" required class="form-control">
                                    </div>
                                    <button type="button" class="btn-remove" title="Remove">
                                      <i class="fas fa-times"></i>
                                    </button>
                                  `;

      container.appendChild(row);

      // Re-index all rows to maintain correct order and check limits
      reindexRows(containerId, fieldName);
      checkMaxLimit(containerId);
    }

    function reindexRows(containerId, fieldName) {
      const container = document.getElementById(containerId);
      const rows = container.querySelectorAll('.field-row');

      rows.forEach((row, index) => {
        const valueInput = row.querySelector('input[name*="[value]"]');

        if (valueInput) {
          const name = valueInput.getAttribute('name').replace(/\[\d+\]/, `[${index}]`);
          valueInput.setAttribute('name', name);
        }
      });
    }

    // Initial limit check
    document.addEventListener('DOMContentLoaded', () => {
      checkMaxLimit('phones-container');
      checkMaxLimit('emails-container');
    });

    // Handle row removal with animation
    document.addEventListener('click', function (e) {
      const removeBtn = e.target.closest('.btn-remove');
      if (removeBtn) {
        const row = removeBtn.closest('.field-row');
        row.style.opacity = '0';
        row.style.transform = 'translateX(50px)';
        row.style.transition = 'all 0.3s ease';

        setTimeout(() => {
          row.remove();
          // Find the container and reindex
          const container = row.closest('.fields-container');
          if (container) {
            const containerId = container.id;
            const fieldName = containerId.replace('-container', '');
            reindexRows(containerId, fieldName);
            checkMaxLimit(containerId);
          }
        }, 300);
      }
    });

    // Add animation styles
    const style = document.createElement('style');
    style.textContent = `
                                                                                                                                        @keyframes slideIn {
                                                                                                                                            to {
                                                                                                                                                opacity: 1;
                                                                                                                                                transform: translateY(0);
                                                                                                                                            }
                                                                                                                                        }
                                                                                                                                    `;
    document.head.appendChild(style);
  </script>

  <style>
    /* Settings Header */
    .settings-header {
      background: linear-gradient(135deg, #000000ff 80%, #c7cad8ff 0%);
      border-radius: 12px;
      padding: 30px 35px;
      margin-bottom: 30px;
      color: white;
    }

    .settings-header-content {
      max-width: 800px;
    }

    .settings-title {
      font-size: 28px;
      font-weight: 600;
      margin: 0 0 8px 0;
      display: flex;
      align-items: center;
      gap: 12px;
    }

    .settings-title i {
      font-size: 30px;
    }

    .settings-subtitle {
      font-size: 16px;
      opacity: 1;
      margin: 0;
      line-height: 1.7;
    }

    /* Alerts */
    .alert {
      padding: 16px 20px;
      border-radius: 8px;
      margin-bottom: 20px;
      display: flex;
      align-items: flex-start;
      gap: 12px;
      border: none;
    }

    .alert i {
      font-size: 20px;
      margin-top: 2px;
    }

    .alert-success {
      background: #d4edda;
      color: #155724;
      border-left: 4px solid #28a745;
    }

    .alert-danger {
      background: #f8d7da;
      color: #721c24;
      border-left: 4px solid #dc3545;
    }

    .alert-danger ul {
      margin: 0;
      padding-left: 20px;
    }

    /* Settings Cards */
    .settings-card {
      background: #ffffff;
      border-radius: 12px;
      box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
      margin-bottom: 24px;
      overflow: hidden;
      border: 1px solid #e9ecef;
      transition: box-shadow 0.3s ease;
    }

    .settings-card:hover {
      box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
    }

    .card-header {
      padding: 20px 24px;
      background: #f8f9fa;
      border-bottom: 1px solid #e9ecef;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 12px;
    }

    .card-header-left {
      display: flex;
      align-items: center;
      gap: 16px;
    }

    .card-icon {
      font-size: 24px;
      color: #667eea;
      width: 44px;
      height: 44px;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(102, 126, 234, 0.1);
      border-radius: 10px;
    }

    .whatsapp-icon {
      color: #25D366;
      background: rgba(37, 211, 102, 0.1);
    }

    .email-icon {
      color: #dc3545;
      background: rgba(220, 53, 69, 0.1);
    }

    .social-icon {
      color: #3b5998;
      background: rgba(59, 89, 152, 0.1);
    }

    .card-title {
      font-size: 18px;
      font-weight: 600;
      margin: 0 0 4px 0;
      color: #212529;
    }

    .card-description {
      font-size: 14px;
      color: #6c757d;
      margin: 0;
    }

    .badge {
      background: #e9ecef;
      color: #495057;
      padding: 4px 12px;
      border-radius: 20px;
      font-size: 12px;
      font-weight: 500;
      font-family: 'Courier New', monospace;
      white-space: nowrap;
    }

    .card-body {
      padding: 24px;
    }

    /* Field Rows */
    .fields-container {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }

    .field-row {
      display: flex;
      gap: 14px;
      align-items: flex-end;
      background: #f8f9fa;
      padding: 16px;
      border-radius: 8px;
      border: 1px solid #e9ecef;
      transition: all 0.3s ease;
    }

    .field-row:hover {
      background: #ffffff;
      border-color: #dee2e6;
    }

    .field-group {
      flex: 1;
    }

    .field-icon {
      flex: 0 0 30%;
    }

    .field-value {
      flex: 1;
    }

    .field-label {
      display: block;
      font-size: 13px;
      font-weight: 500;
      color: #495057;
      margin-bottom: 6px;
    }

    .form-control {
      width: 100%;
      padding: 10px 14px;
      border: 1px solid #ced4da;
      border-radius: 6px;
      font-size: 14px;
      transition: all 0.3s ease;
      background: #ffffff;
    }

    .form-control:focus {
      border-color: #667eea;
      outline: none;
      box-shadow: 0 0 0 3px rgba(102, 126, 234, 0.1);
    }

    .form-control::placeholder {
      color: #adb5bd;
      font-size: 13px;
    }

    .btn-remove {
      background: #dc3545;
      color: #ffffff;
      border: none;
      width: 38px;
      height: 38px;
      border-radius: 6px;
      cursor: pointer;
      transition: all 0.3s ease;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-shrink: 0;
    }

    .btn-remove:hover {
      background: #c82333;
      transform: scale(1.05);
    }

    .btn-remove:active {
      transform: scale(0.95);
    }

    .btn-add {
      background: #ffffff;
      color: #667eea;
      border: 2px dashed #ced4da;
      padding: 12px 20px;
      border-radius: 8px;
      cursor: pointer;
      font-weight: 500;
      font-size: 14px;
      transition: all 0.3s ease;
      width: 100%;
      margin-top: 8px;
      display: flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
    }

    .btn-add:hover {
      border-color: #667eea;
      background: rgba(102, 126, 234, 0.05);
      transform: translateY(-2px);
    }

    .btn-add:active {
      transform: translateY(0);
    }

    /* Form Actions */
    .form-actions {
      display: flex;
      gap: 16px;
      justify-content: flex-end;
      padding: 24px 0;
      border-top: 2px solid #e9ecef;
      margin-top: 8px;
    }

    .btn {
      padding: 12px 28px;
      border: none;
      border-radius: 8px;
      font-weight: 600;
      font-size: 15px;
      cursor: pointer;
      transition: all 0.3s ease;
      display: inline-flex;
      align-items: center;
      gap: 8px;
      text-decoration: none;
    }

    .btn-primary {
      background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
      color: #ffffff;
    }

    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
    }

    .btn-primary:active {
      transform: translateY(0);
    }

    .btn-secondary {
      background: #e9ecef;
      color: #495057;
    }

    .btn-secondary:hover {
      background: #dee2e6;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      .settings-header {
        padding: 24px 20px;
      }

      .settings-title {
        font-size: 22px;
      }

      .card-header {
        flex-direction: column;
        align-items: flex-start;
      }

      .field-row {
        flex-direction: column;
        align-items: stretch;
        padding: 16px;
      }

      .field-icon {
        flex: 1;
      }

      .btn-remove {
        align-self: flex-end;
      }

      .form-actions {
        flex-direction: column;
      }

      .btn {
        justify-content: center;
      }
    }
  </style>
@endsection
