<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('errors.maintenance') }} - Siloam College</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .maintenance-card {
            background: white;
            border-radius: 20px;
            padding: 50px;
            box-shadow: 0 20px 60px rgba(0,0,0,0.3);
            max-width: 500px;
            text-align: center;
        }
        .maintenance-icon {
            font-size: 5rem;
            color: #667eea;
            margin-bottom: 20px;
        }
        .spinner {
            animation: spin 2s linear infinite;
        }
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
    </style>
</head>
<body>
    <div class="maintenance-card">
        <div class="maintenance-icon">
            <i class="fas fa-tools spinner"></i>
        </div>
        <h1 class="h2 mb-3">{{ __('errors.maintenance') }}</h1>
        <p class="text-muted mb-4">
            {{ __('errors.maintenance_message') }}
        </p>
        <div class="d-flex justify-content-center gap-4 text-muted">
            <div>
                <i class="fab fa-facebook fa-lg"></i>
            </div>
            <div>
                <i class="fab fa-x-twitter fa-lg"></i>
            </div>
            <div>
                <i class="fab fa-instagram fa-lg"></i>
            </div>
        </div>
    </div>
</body>
</html>
