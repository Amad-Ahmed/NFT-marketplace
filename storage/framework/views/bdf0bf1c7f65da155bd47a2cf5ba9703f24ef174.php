
<?php $__env->startSection('main-section'); ?>
<link rel="stylesheet" type="text/css" href="/css/explore.css" />
<div class="container-fluid">
        <div class="container">
            <h1 class="text-center explore">Explore Collections</h1>
            <ul class="nav nav-pills center-pills">
                <li class="nav-item">
                    <a href="#trending" class="nav-link pill-head show active" data-bs-toggle="pill">Trending</a>
                </li>
                <li class="nav-item">
                    <a href="#top" class="nav-link pill-head" data-bs-toggle="pill">Top</a>
                </li>
                <li class="nav-item">
                    <a href="#art" class="nav-link pill-head" data-bs-toggle="pill">Art</a>
                </li>
                <li class="nav-item">
                    <a href="#collectibles" class="nav-link pill-head" data-bs-toggle="pill">Collectibles</a>
                </li>
                <li class="nav-item">
                    <a href="#domain" class="nav-link pill-head" data-bs-toggle="pill">Domain Names</a>
                </li>
                <li class="nav-item">
                    <a href="#music" class="nav-link pill-head" data-bs-toggle="pill">Music</a>
                </li>
                <li class="nav-item">
                    <a href="#photography" class="nav-link pill-head" data-bs-toggle="pill">Photography</a>
                </li>
                <li class="nav-item">
                    <a href="#sports" class="nav-link pill-head" data-bs-toggle="pill">Sports</a>
                </li>
                <li class="nav-item">
                    <a href="#trading" class="nav-link pill-head" data-bs-toggle="pill">Trading Cards</a>
                </li>
                <li class="nav-item">
                    <a href="#utility" class="nav-link pill-head" data-bs-toggle="pill">Utility</a>
                </li>
                <li class="nav-item">
                    <a href="#virtual" class="nav-link pill-head" data-bs-toggle="pill">Virtual Worlds</a>
                </li>
            </ul>
            <div class="tab-content">
                <div id="trending" class="container tab-pane fade show active">
                        <?php $__currentLoopData = $trending; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($count%3==0): ?>
                                <div class="row">
                            <?php endif; ?>
                                <div class="col-12 col-lg-4 col-sm-12">
                                <a href="/detail/<?php echo e($collection->slugName); ?>">
                                    <div class="nft-card">
                                        <div class="nft-banner"><img style="object-fit: cover;" src="<?php echo e($collection->Banner); ?>" alt=""></div>
                                        <div class="nft-info">
                                            <div class="nft-img"><img src="<?php echo e($collection->Image); ?>" alt=""></div>
                                            <div class="nft-name"><?php echo e($collection->Name); ?></div>
                                            <div class="nft-author">
                                                <p class="by">by <span class="author-name"><?php echo e($collection->Developer); ?></span></p>
                                            </div>
                                            <span class="nft-desc"><?php echo e(Str::limit($collection->Description, 105)); ?></span>
                                        </div>
                                    </div>
                                </a>
                                </div>
                            <?php
                            $count+=1;
                            ?>
                            <?php if($count%3==0): ?>
                                </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php if($count%3!=0): ?>
                                </div>
                            <?php endif; ?>
                            
                <?php
                $count=0;
                ?>
                <div id="top" class="container tab-pane fade">
                        <?php $__currentLoopData = $top; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($count%3==0): ?>
                                <div class="row">
                            <?php endif; ?>
                                <div class="col-12 col-lg-4 col-sm-12">
                                <a href="/detail/<?php echo e($collection->slugName); ?>">
                                    <div class="nft-card">
                                        <div class="nft-banner"><img style="object-fit: cover;" src="<?php echo e($collection->Banner); ?>" alt=""></div>
                                        <div class="nft-info">
                                            <div class="nft-img"><img src="<?php echo e($collection->Image); ?>" alt=""></div>
                                            <div class="nft-name"><?php echo e($collection->Name); ?></div>
                                            <div class="nft-author">
                                                <p class="by">by <span class="author-name"><?php echo e($collection->Developer); ?></span></p>
                                            </div>
                                            <span class="nft-desc"><?php echo e(Str::limit($collection->Description, 105)); ?></span>
                                        </div>
                                    </div>
                                </a>
                                </div>
                            <?php
                            $count+=1;
                            ?>
                            <?php if($count%3==0): ?>
                                </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php if($count%3!=0): ?>
                                </div>
                            <?php endif; ?>
                <?php
                $count=0;
                ?>
                <div id="art" class="container tab-pane fade">
                        <?php $__currentLoopData = $art; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($count%3==0): ?>
                                <div class="row">
                            <?php endif; ?>
                                <div class="col-12 col-lg-4 col-sm-12">
                                <a href="<?php echo e($collection->slugName); ?>">
                                    <div class="nft-card">
                                        <div class="nft-banner"><img style="object-fit: cover;" src="<?php echo e($collection->Banner); ?>" alt=""></div>
                                        <div class="nft-info">
                                            <div class="nft-img"><img src="<?php echo e($collection->Image); ?>" alt=""></div>
                                            <div class="nft-name"><?php echo e($collection->Name); ?></div>
                                            <div class="nft-author">
                                                <p class="by">by <span class="author-name"><?php echo e($collection->Developer); ?></span></p>
                                            </div>
                                            <span class="nft-desc"><?php echo e(Str::limit($collection->Description, 105)); ?></span>
                                        </div>
                                    </div>
                                </a>
                                </div>
                            <?php
                            $count+=1;
                            ?>
                            <?php if($count%3==0): ?>
                                </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php if($count%3!=0): ?>
                                </div>
                            <?php endif; ?>
                <?php
                $count=0;
                ?>
                <div id="collectibles" class="container tab-pane fade">
                        <?php $__currentLoopData = $collectibles; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($count%3==0): ?>
                                <div class="row">
                            <?php endif; ?>
                                <div class="col-12 col-lg-4 col-sm-12">
                                <a href="/detail/<?php echo e($collection->slugName); ?>">
                                    <div class="nft-card">
                                        <div class="nft-banner"><img style="object-fit: cover;" src="<?php echo e($collection->Banner); ?>" alt=""></div>
                                        <div class="nft-info">
                                            <div class="nft-img"><img src="<?php echo e($collection->Image); ?>" alt=""></div>
                                            <div class="nft-name"><?php echo e($collection->Name); ?></div>
                                            <div class="nft-author">
                                                <p class="by">by <span class="author-name"><?php echo e($collection->Developer); ?></span></p>
                                            </div>
                                            <span class="nft-desc"><?php echo e(Str::limit($collection->Description, 105)); ?></span>
                                        </div>
                                    </div>
                                </a>
                                </div>
                            <?php
                            $count+=1;
                            ?>
                            <?php if($count%3==0): ?>
                                </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php if($count%3!=0): ?>
                                </div>
                            <?php endif; ?>
                <?php
                $count=0;
                ?>
                <div id="domain" class="container tab-pane fade">
                        <?php $__currentLoopData = $domains; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($count%3==0): ?>
                                <div class="row">
                            <?php endif; ?>
                            <div class="col-12 col-lg-4 col-sm-12">
                                <a href="/detail/<?php echo e($collection->slugName); ?>">
                                    <div class="nft-card">
                                        <div class="nft-banner"><img style="object-fit: cover;" src="<?php echo e(substr($collection->Banner, 0, -5)); ?>" alt=""></div>
                                        <div class="nft-info">
                                            <div class="nft-img"><img src="<?php echo e(substr($collection->Image, 0, -5)); ?>" alt=""></div>
                                            <div class="nft-name"><?php echo e($collection->Name); ?></div>
                                            <div class="nft-author">
                                                <p class="by">by <span class="author-name"><?php echo e($collection->Developer); ?></span></p>
                                            </div>
                                            <span class="nft-desc"><?php echo e(Str::limit($collection->Description, 105)); ?></span>
                                        </div>
                                    </div>
                                    </a>
                                </div>
                            <?php
                            $count+=1;
                            ?>
                            <?php if($count%3==0): ?>
                                </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php if($count%3!=0): ?>
                                </div>
                            <?php endif; ?>
                <?php
                $count=0;
                ?>
                <div id="music" class="container tab-pane fade">
                        <?php $__currentLoopData = $music; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($count%3==0): ?>
                                <div class="row">
                            <?php endif; ?>
                                <div class="col-12 col-lg-4 col-sm-12">
                                    <a href="/detail/<?php echo e($collection->slugName); ?>">
                                        <div class="nft-card">
                                            <div class="nft-banner"><img style="object-fit: cover;" src="<?php echo e($collection->Banner); ?>" alt=""></div>
                                            <div class="nft-info">
                                                <div class="nft-img"><img src="<?php echo e($collection->Image); ?>" alt=""></div>
                                                <div class="nft-name"><?php echo e($collection->Name); ?></div>
                                                <div class="nft-author">
                                                    <p class="by">by <span class="author-name"><?php echo e($collection->Developer); ?></span></p>
                                                </div>
                                                <span class="nft-desc"><?php echo e(Str::limit($collection->Description, 105)); ?></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            $count+=1;
                            ?>
                            <?php if($count%3==0): ?>
                                </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php if($count%3!=0): ?>
                                </div>
                            <?php endif; ?>
                <?php
                $count=0;
                ?>
                <div id="photography" class="container tab-pane fade">
                        <?php $__currentLoopData = $photography; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($count%3==0): ?>
                                <div class="row">
                            <?php endif; ?>
                                <div class="col-12 col-lg-4 col-sm-12">
                                    <a href="/detail/<?php echo e($collection->slugName); ?>">
                                        <div class="nft-card">
                                            <div class="nft-banner"><img style="object-fit: cover;" src="<?php echo e($collection->Banner); ?>" alt=""></div>
                                            <div class="nft-info">
                                                <div class="nft-img"><img src="<?php echo e($collection->Image); ?>" alt=""></div>
                                                <div class="nft-name"><?php echo e($collection->Name); ?></div>
                                                <div class="nft-author">
                                                    <p class="by">by <span class="author-name"><?php echo e($collection->Developer); ?></span></p>
                                                </div>
                                                <span class="nft-desc"><?php echo e(Str::limit($collection->Description, 105)); ?></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            $count+=1;
                            ?>
                            <?php if($count%3==0): ?>
                                </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php if($count%3!=0): ?>
                                </div>
                            <?php endif; ?>
                <?php
                $count=0;
                ?>
                <div id="sports" class="container tab-pane fade">
                        <?php $__currentLoopData = $sports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($count%3==0): ?>
                                <div class="row">
                            <?php endif; ?>
                                <div class="col-12 col-lg-4 col-sm-12">
                                    <a href="/detail/<?php echo e($collection->slugName); ?>">
                                        <div class="nft-card">
                                            <div class="nft-banner"><img style="object-fit: cover;" src="<?php echo e($collection->Banner); ?>" alt=""></div>
                                            <div class="nft-info">
                                                <div class="nft-img"><img src="<?php echo e($collection->Image); ?>" alt=""></div>
                                                <div class="nft-name"><?php echo e($collection->Name); ?></div>
                                                <div class="nft-author">
                                                    <p class="by">by <span class="author-name"><?php echo e($collection->Developer); ?></span></p>
                                                </div>
                                                <span class="nft-desc"><?php echo e(Str::limit($collection->Description, 105)); ?></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            $count+=1;
                            ?>
                            <?php if($count%3==0): ?>
                                </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php if($count%3!=0): ?>
                                </div>
                            <?php endif; ?>
                <?php
                $count=0;
                ?>
                <div id="trading" class="container tab-pane fade">
                        <?php $__currentLoopData = $trading; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($count%3==0): ?>
                                <div class="row">
                            <?php endif; ?>
                                <div class="col-12 col-lg-4 col-sm-12">
                                    <a href="/detail/<?php echo e($collection->slugName); ?>">
                                        <div class="nft-card">
                                            <div class="nft-banner"><img style="object-fit: cover;" src="<?php echo e($collection->Banner); ?>" alt=""></div>
                                            <div class="nft-info">
                                                <div class="nft-img"><img src="<?php echo e($collection->Image); ?>" alt=""></div>
                                                <div class="nft-name"><?php echo e($collection->Name); ?></div>
                                                <div class="nft-author">
                                                    <p class="by">by <span class="author-name"><?php echo e($collection->Developer); ?></span></p>
                                                </div>
                                                <span class="nft-desc"><?php echo e(Str::limit($collection->Description, 105)); ?></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            $count+=1;
                            ?>
                            <?php if($count%3==0): ?>
                                </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php if($count%3!=0): ?>
                                </div>
                            <?php endif; ?>
                <?php
                $count=0;
                ?>
                <div id="utility" class="container tab-pane fade">
                        <?php $__currentLoopData = $utility; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($count%3==0): ?>
                                <div class="row">
                            <?php endif; ?>
                                <div class="col-12 col-lg-4 col-sm-12">
                                    <a href="/detail/<?php echo e($collection->slugName); ?>">
                                        <div class="nft-card">
                                            <div class="nft-banner"><img style="object-fit: cover;" src="<?php echo e($collection->Banner); ?>" alt=""></div>
                                            <div class="nft-info">
                                                <div class="nft-img"><img src="<?php echo e($collection->Image); ?>" alt=""></div>
                                                <div class="nft-name"><?php echo e($collection->Name); ?></div>
                                                <div class="nft-author">
                                                    <p class="by">by <span class="author-name"><?php echo e($collection->Developer); ?></span></p>
                                                </div>
                                                <span class="nft-desc"><?php echo e(Str::limit($collection->Description, 105)); ?></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            $count+=1;
                            ?>
                            <?php if($count%3==0): ?>
                                </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php if($count%3!=0): ?>
                                </div>
                            <?php endif; ?>
                <?php
                $count=0;
                ?>
                <div id="virtual" class="container tab-pane fade">
                        <?php $__currentLoopData = $virtual; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $collection): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($count%3==0): ?>
                                <div class="row">
                            <?php endif; ?>
                                <div class="col-12 col-lg-4 col-sm-12">
                                    <a href="/detail/<?php echo e($collection->slugName); ?>">
                                        <div class="nft-card">
                                            <div class="nft-banner"><img style="object-fit: cover;" src="<?php echo e($collection->Banner); ?>" alt=""></div>
                                            <div class="nft-info">
                                                <div class="nft-img"><img src="<?php echo e($collection->Image); ?>" alt=""></div>
                                                <div class="nft-name"><?php echo e($collection->Name); ?></div>
                                                <div class="nft-author">
                                                    <p class="by">by <span class="author-name"><?php echo e($collection->Developer); ?></span></p>
                                                </div>
                                                <span class="nft-desc"><?php echo e(Str::limit($collection->Description, 105)); ?></span>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            <?php
                            $count+=1;
                            ?>
                            <?php if($count%3==0): ?>
                                </div>
                            <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                            <?php if($count%3!=0): ?>
                                </div>
                            <?php endif; ?>
            </div>

    </div></div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\web_project\resources\views/explore.blade.php ENDPATH**/ ?>