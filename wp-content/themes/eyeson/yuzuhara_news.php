<?php // ブログの一覧を表示する start ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article class="blog-list__list-item">
        <a href="<?php the_permalink(); ?>" class="blog-item">
            <?php // アイキャッチを表示させる start ?>    
            <div class="blog-item__thumbnail">
                <?php if(has_post_thumbnail()): ?>
                <img class="blog-item__thumbnail-image" src="<?php the_post_thumbnail_url('large'); ?>">
                <?php endif; ?>
            </div>
            <?php // アイキャッチを表示させる end ?>
            <div class="blog-item__content">
                <?php // タイトルを表示させる start ?>
                <h3 class="blog-item__title"><?php the_title(); ?></h3>
                <?php // タイトルを表示させる end ?>
                <?php // 抜粋を表示させる start ?>
                <h3 class="blog-item__read"><?php the_excerpt(); ?></h3>
                <?php // 抜粋を表示させる end ?>
                <div class="blog-item__button">
                    <span class="blog-item__button-more">記事を読む</span>
                </div>
                ああああああああ
            </div>
        </a>
    </article>
<?php endwhile; endif; ?>
<?php // ブログの一覧を表示する end ?>