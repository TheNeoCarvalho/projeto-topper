					<div class="header-wrapicon2">
						<img src="images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
						<span class="header-icons-noti">
						<?php
							echo count($_SESSION['carrinho']);
						?>
						</span>

						<!-- Header cart noti -->
						<div class="header-cart header-dropdown">
							<ul class="header-cart-wrapitem">
																
							<?php 
							include('admin/config.php');
							$total = 0;
							foreach ($_SESSION['carrinho'] as $id => $qnt) {

								$sql = "SELECT * FROM produtos WHERE id = '$id'";
								$query = mysqli_query($con, $sql);
								$prods = mysqli_fetch_assoc($query);
							
								echo '
					
								<li class="header-cart-item">
									<div class="header-cart-item-img">
										<img src="images/'. $prods['urlImg'].'" alt="IMG">
									</div>

									<div class="header-cart-item-txt">
										<a href="#" class="header-cart-item-name">
											'.  $prods['nome'].'
										</a>

										<span class="header-cart-item-info">
										'. $qnt .'x'.  $prods['preco'].'
										</span>
									</div>
								</li>';

								$total += $qnt * $prods['preco'];
								}
								?>

							</ul>

							<div class="header-cart-total">
								Total: <?php echo number_format($total,2,",","."); ?>
							</div>

							<div class="header-cart-buttons">
								<div class="header-cart-wrapbtn">
									<!-- Button -->
									<a href="cart.php" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
										View Cart
									</a>
								</div>

							</div>
						</div>
					</div>