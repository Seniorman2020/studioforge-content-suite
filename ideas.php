<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/layout.php';

$data = studio_data();

studio_render_header(
    'ideas',
    'Idea Bank | StudioForge',
    'A structured Nigerian idea bank for content hooks, launch themes, editorial prompts, and reusable creative pillars.'
);
?>
<main>
    <section class="page-hero">
        <div>
            <span class="eyebrow">Idea bank</span>
            <h1>Save the sparks before the market moves on.</h1>
            <p>A flexible planning bank for Naija hooks, customer stories, promo angles, and campaign formats.</p>
        </div>
    </section>

    <section class="idea-grid">
        <?php foreach ($data['ideas'] as $idea): ?>
            <article class="idea-card">
                <span class="chip"><?= studio_e($idea['type']) ?></span>
                <h2><?= studio_e($idea['title']) ?></h2>
                <p><?= studio_e($idea['summary']) ?></p>
                <div class="idea-meta">
                    <span><?= studio_e($idea['energy']) ?></span>
                    <span>Ready for production</span>
                </div>
            </article>
        <?php endforeach; ?>
    </section>

    <section class="section-grid narrow-gap">
        <article class="panel">
            <div class="panel-head">
                <div>
                    <span class="section-label">Voice system</span>
                    <h2>Core creative pillars</h2>
                </div>
            </div>
            <div class="tag-cloud">
                <?php foreach ($data['pillars'] as $pillar): ?>
                    <span class="tag"><?= studio_e($pillar) ?></span>
                <?php endforeach; ?>
            </div>
        </article>

        <article class="panel accent-panel">
            <span class="section-label">Why this matters</span>
            <h2>Ideas become assets faster when the system already understands your market voice.</h2>
            <p class="lead-copy small-copy">That is the difference between random posting and a proper Nigerian content system. A strong idea bank protects consistency while still leaving room for fresh creative moves.</p>
        </article>
    </section>
</main>
<?php studio_render_footer(); ?>
