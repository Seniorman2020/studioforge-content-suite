<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/layout.php';

$data = studio_data();

studio_render_header(
    'ideas',
    'Ideas Vault | StudioForge',
    'A structured ideas vault for content hooks, launch concepts, editorial prompts, and reusable creative pillars.'
);
?>
<main>
    <section class="page-hero">
        <div>
            <span class="eyebrow">Ideas vault</span>
            <h1>Capture sparks before they disappear.</h1>
            <p>A flexible concept library for hooks, prompts, formats, and premium storytelling angles.</p>
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
                    <span>Ready to shape</span>
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
            <h2>Ideas become assets faster when the system already understands your voice.</h2>
            <p class="lead-copy small-copy">This is the difference between random posting and brand-led publishing. A good idea vault protects consistency while still leaving room for fresh creative risk.</p>
        </article>
    </section>
</main>
<?php studio_render_footer(); ?>
