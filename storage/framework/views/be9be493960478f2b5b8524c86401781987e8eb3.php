
<?php $__env->startSection('main-section'); ?>
<link rel="stylesheet" href="/css/login.css">
<script src="/js/login.js"></script>

<div id="wallet_container" class="container">
        <h2 id="wallet-heading" class="font_1 main-wallet">
            Connect Your Wallet
        </h2>
        <p class="p-wallet">Connect with one of our available wallet providers or create a new one.</p>
        <div id="btns" class="btn-group-vertical group-wallet">
            <button type="button" class="btn metamask text-left btn-block" onclick="connectWalletHandler();"><img
                    class="img-fluid float-left wallet_icons" alt="Responsive image" src="/images/MetaMask_Fox.svg.png"><span
                    class="font_1">MetaMask</span><span class="badge bg-primary badge1">Popular</span></button>
            <button type="button" class="btn  text-left btn-block"><img
                    class="img-fluid float-left wallet_icons" alt="Responsive image" src="/images/coinbase2.png"><span
                    class="font_1">Coinbase Wallet</span></button>
            <button type="button" class="btn  text-left btn-block" onclick="connectWC();"><img
                    class="img-fluid float-left wallet_icons" alt="Responsive image" src="/images/walletconnect.png"><span
                    class="font_1">WalletConnect</span><span class="badge bg-secondary badge2">Solana</span></button>
            <button type="button" class="btn  text-left btn-block"><img
                    class="img-fluid float-left wallet_icons" alt="Responsive image" src="/images/phantom.jpeg"><span
                    class="font_1">Phantom</span></button>
            <button type="button" class="btn  text-left btn-block"><img
                    class="img-fluid float-left wallet_icons" alt="Responsive image" src="/images/formatic.jpeg"><span
                    class="font_1">Formatic</span><span class="badge bg-secondary badge3">Solana</span></button>
        </div>

    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_project\resources\views/login.blade.php ENDPATH**/ ?>