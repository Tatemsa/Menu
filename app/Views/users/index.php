<br>
<div class="container">
    <div class="bd-example-snippet bd-code-snippet">
        <div class="bd-example m-0 border-0">
            <div class="row  row-cols-1 row-cols-md-3 g-4">
                <?php foreach($items as $item):?>
                    <div class="col">
                        <div class="card">
                            <svg class="bd-placeholder-img card-img-top" width="100%" height="180" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image du plat</text></svg>
                            <div class="card-body">
                                <h5 class="card-title"><?=$item->name?></h5>
                                <p class="card-text"><?=$item->description?></p>
                                <a href="?p=user.users.buy" class="btn btn-primary">Commander</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach;?>
            </div>
        </div> 
    </div>
</div>