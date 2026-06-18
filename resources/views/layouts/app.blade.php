<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    
    <title>@yield('title', 'Global Engineering & Consulting | TML Consulting Group')</title>
    <meta name="description" content="@yield('meta_description', 'TML Consulting Group: Engineering and consulting specialists in oil & gas, energy transition, and industrial solutions across global markets.')">

    {{-- Core Styles --}}
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    
    {{-- Page Specific Styles --}}
    @stack('styles')
</head>
<body>
    {{-- Engineering Preloader --}}
    <div id="preloader" style="position:fixed;top:0;left:0;width:100%;height:100%;background:#0b1424;z-index:9999;display:flex;align-items:center;justify-content:center;transition:opacity 0.8s cubic-bezier(0.4, 0, 0.2, 1), visibility 0.8s;overflow:hidden;">
        {{-- Blueprint Grid Background --}}
        <div style="position:absolute;top:0;left:0;width:100%;height:100%;background-image:linear-gradient(rgba(200,153,58,0.05) 1px, transparent 1px), linear-gradient(90deg, rgba(200,153,58,0.05) 1px, transparent 1px);background-size:40px 40px;opacity:0.6;"></div>
        
        <div style="position:relative;text-align:center;z-index:2;">
            {{-- Rotating Technical Compass --}}
            <div style="position:relative;width:100px;height:100px;margin:0 auto 2.5rem;">
                <div style="position:absolute;top:0;left:0;width:100%;height:100%;border:2px dashed rgba(200,153,58,0.3);border-radius:50%;animation:spin 12s linear infinite;"></div>
                <div style="position:absolute;top:10px;left:10px;width:calc(100% - 20px);height:calc(100% - 20px);border:1px solid rgba(200,153,58,0.6);border-radius:50%;animation:spin 8s linear reverse infinite;"></div>
                <div style="position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);width:12px;height:12px;background:var(--tml-gold);border-radius:50%;box-shadow:0 0 20px var(--tml-gold);animation:pulse-glow 2s ease-in-out infinite;"></div>
                {{-- Scanning Needle --}}
                <div style="position:absolute;top:0;left:50%;width:2px;height:50%;background:linear-gradient(transparent, var(--tml-gold));transform-origin:bottom center;animation:spin 3s cubic-bezier(0.4, 0, 0.2, 1) infinite;"></div>
            </div>
            
            <div style="color:rgba(255,255,255,0.4);font-family:'Consolas',monospace;font-size:0.65rem;text-transform:uppercase;letter-spacing:0.4em;margin-bottom:1rem;">Technical Precision</div>
            <div style="color:#fff;font-weight:900;letter-spacing:0.35em;font-size:1.4rem;text-shadow:0 0 10px rgba(255,255,255,0.2);">TML GROUP</div>
            <div style="color:var(--tml-gold);font-family:'Consolas',monospace;font-size:0.6rem;margin-top:1.5rem;opacity:0.6;">INITIALIZING GLOBAL ASSETS...</div>
        </div>
    </div>

    @include('partials.header')

    <main role="main">
        @yield('content')
    </main>

    @include('partials.footer')

    {{-- Core Scripts --}}
    <script src="{{ asset('js/main.js') }}"></script>
    
    {{-- Page Specific Scripts --}}
    @stack('scripts')

</body>
</html>
