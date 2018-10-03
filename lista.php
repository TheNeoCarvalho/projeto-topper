<?php

		include('admin/config.php');

			$sql = "SELECT * FROM produtos ORDER BY nome ASC" ; 
			
			$query = mysqli_query($con, $sql);

			while($produto = mysqli_fetch_assoc($query)){
				echo '
									

						<div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
						<!-- Block2 -->
								<div class="block2">
									<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
										<img class="img-responsive" src="images/'.$produto['urlImg'].'" alt="IMG-PRODUCT">

										<div class="block2-overlay trans-0-4">
											<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
												<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
												<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
											</a>

											<div class="block2-btn-addcart w-size1 trans-0-4">
												<!-- Button -->
												<button class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
													Add ao carrinho
												</button>
											</div>
										</div>
									</div>

										<div class="block2-txt p-t-20">
											<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
												'.$produto['nome'].'
											</a>

											<span class="block2-price m-text6 p-r-5">
												R$ '.$produto['preco'].'
											</span>
										</div>
									</div>
								</div>';

							}
?>
