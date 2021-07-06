<div id="menuShopContent" class="p-4 flex flex-no-wrap bg-white z-20">
	<button class="dropdown-btn block w-full rounded bd-color-gray-dark
			hover:bg-color-gray-light focus:outline-none mr-1 p-sm">
		<p class="toggle_menu">売場一覧</p>
	</button>
	<button type="submit" class="block w-full rounded bd-color-gray-dark
			hover:bg-color-gray-light focus:outline-none ml-1 mr-1 p-sm">
		<!--		<a href="<?php echo $this->escape($this->top_page) . 'shop/' . $this->escape($this->shop_code); ?>/item_lst.php?fvrt=1">いつもの</a> -->
		<a href="<?php echo $this->escape($this->top_page) . 'shop/' . $this->escape($this->shop_code); ?>/item_lst.php?htry=1">いつもの</a>
	</button>
	<button type="submit" class="block w-full rounded bd-color-gray-dark
		hover:bg-color-gray-light focus:outline-none ml-1 p-sm">
		<a href="<?php echo $this->escape($this->top_page); ?>news/index.php">お知らせ</a>
	</button>
</div>

<ul id="uriba-list" class="open-close relative">
	<?php foreach ($this->menu_group_data as $key => $val) {
		if (isset($val['menu_group_code'])) {
	?>
			<div class="relative">
				<li class="parent_1 arrow_down">
					<?php $url_parent = $this->escape($this->top_page) . 'shop/' . $this->escape($this->shop_code) . '/item_lst.php?mgcd=' . $val['menu_group_code']; ?>
					<p class="bd-b-color-gray-light p-3"><?php echo $val['menu_group_name'] ?></p>
					<?php if (isset($val['group_data'])) { ?>
						<ul class="hidden">
							<?php foreach ($val['group_data'] as $subkey => $subval) { ?>
								<li class="parent_2 relative arrow_down ml-4">
									<p class="bd-b-color-gray-light bg-color-gray-light-more p-3"><?php echo $subval['category_name'] ?></p>
									<?php if (isset($subval['group_data'])) { ?>
										<ul class="hidden">
											<?php foreach ($subval['group_data'] as $subkey2 => $subval2) { ?>
												<li class="ml-4">
													<a href="<?php echo $url_parent ?>&ctcd=<?php echo $subval2['category_code'] ?>">
														<p class="bd-b-color-gray-light bg-color-gray-light p-3"><?php echo $subval2['category_name'] ?></p>
													</a>
												</li>
											<?php } ?>
										</ul>
									<?php } ?>
								</li>
							<?php } ?>
						</ul>
					<?php } ?>
				</li>
			</div>
		<?php } ?>
	<?php } ?>
</ul>

<script>
	$(function() {
		$('.toggle_menu').click(function() {
			$('#uriba-list').slideToggle();
			$(this).next('ul').slideToggle();
		});
		$('li').click(function(e) {
			$(this).children('ul').slideToggle();
			$(this).toggleClass('open', 200);
			e.stopPropagation();
		});
	});
</script>