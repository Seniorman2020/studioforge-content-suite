<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/layout.php';

$data = studio_data();

studio_render_header(
    'analytics',
    'Analytics | StudioForge',
    'Performance dashboard for Nigerian campaign analytics, audience learnings, and experiment tracking.'
);
?>
<main>
    <section class="page-hero">
        <div>
            <span class="eyebrow">Analytics</span>
            <h1>See the signals that matter for Nigerian audiences.</h1>
            <p>Track the formats, hooks, and visual choices that pull real attention so the next campaign gets sharper.</p>
        </div>
    </section>

    <section class="metric-strip">
        <?php foreach ($data['analytics'] as $metric): ?>
            <article class="metric-card metric-inline">
                <span><?= studio_e($metric['label']) ?></span>
                <strong><?= studio_e($metric['value']) ?></strong>
                <p><?= studio_e($metric['delta']) ?></p>
            </article>
        <?php endforeach; ?>
    </section>

    <section class="two-column">
        <article class="panel">
            <div class="panel-head">
                <div>
                    <span class="section-label">Performance notes</span>
                    <h2>What moved this cycle</h2>
                </div>
            </div>
            <div class="timeline-list">
                <div class="timeline-item">
                    <strong>Audience response</strong>
                    <p>Founder-led stories and simple local phrasing drove the strongest retention in Stories and warmer DM replies.</p>
                </div>
                <div class="timeline-item">
                    <strong>Visual system</strong>
                    <p>Bright white layouts with stronger product focus made offers easier to trust and easier to scan.</p>
                </div>
                <div class="timeline-item">
                    <strong>Publishing time</strong>
                    <p>Morning emails and late-afternoon carousel drops beat mid-day posting for this audience mix.</p>
                </div>
            </div>
        </article>

        <article class="panel accent-panel">
            <span class="section-label">Attribution snapshot</span>
            <h2>Best-performing themes</h2>
            <div class="tag-cloud">
                <span class="tag">Founder perspective</span>
                <span class="tag">Practical checklists</span>
                <span class="tag">Clean product close-ups</span>
                <span class="tag">Behind-the-scenes trust</span>
            </div>
        </article>
    </section>

    <section class="panel">
        <div class="panel-head">
            <div>
                <span class="section-label">Experiment log</span>
                <h2>Creative patterns worth keeping</h2>
            </div>
        </div>
        <div class="experiment-grid">
            <?php foreach ($data['experiments'] as $experiment): ?>
                <article class="experiment-card">
                    <strong><?= studio_e($experiment['title']) ?></strong>
                    <p><?= studio_e($experiment['result']) ?></p>
                    <span><?= studio_e($experiment['impact']) ?></span>
                </article>
            <?php endforeach; ?>
        </div>
    </section>
</main>
<?php studio_render_footer(); ?>
