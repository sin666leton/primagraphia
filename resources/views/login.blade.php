<div class="login-wrapper">
    <div class="login-bg-shape login-bg-shape-1"></div>
    <div class="login-bg-shape login-bg-shape-2"></div>
    <div class="login-card">
        <a href="index.html" class="login-brand text-decoration-none">
            <i class="bi bi-asterisk"></i>
            <span>Spark Admin</span>
        </a>
        <p class="login-subtitle">Please sign in to access your dashboard</p>
        <form wire:submit="login" method="POST" id="loginForm" class="needs-validation" novalidate>
            @csrf
            <div class="login-form-group">
                <label for="email" class="login-form-label">Email Address</label>
                <div class="login-input-group">
                    <i class="bi bi-envelope input-icon"></i>
                    <input wire:model="email" name="email" type="email" id="email" class="login-input"
                        placeholder="name@company.com" required>
                </div>
                @error('auth')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="login-form-group">
                <label for="password" class="login-form-label">Password</label>
                <div class="login-input-group">
                    <i class="bi bi-shield-lock input-icon"></i>
                    <input wire:model="password" name="password" type="password" id="password" class="login-input login-input-password"
                        placeholder="••••••••" required>
                    <button type="button" class="password-toggle-btn" id="toggle-password"
                        aria-label="Show password">
                        <i class="bi bi-eye"></i>
                    </button>
                </div>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="login-options">
                <label class="custom-control-label">
                    <input type="checkbox" class="custom-checkbox-input" id="rememberMe">
                    <span>Remember Me</span>
                </label>
                <a href="#" class="forgot-password-link">Forgot Password?</a>
            </div>
            <button type="submit" class="btn-login" id="btn-submit">
                <span>Sign In to Dashboard</span>
                <i class="bi bi-arrow-right"></i>
            </button>
        </form>
    </div>
</div>