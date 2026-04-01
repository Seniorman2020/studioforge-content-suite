<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/layout.php';

$data = studio_data();

studio_render_header(
    'index',
    'StudioForge | Content Operations Suite',
    'A refined content operations suite for campaign planning, scheduling, approvals, and performance insights.'
);
?>
<main>
    <section class="hero">
        <div class="hero-copy">
            <span class="eyebrow">Content operations platform</span>
            <h1><?= studio_e($data['brand']['headline']) ?></h1>
            <p class="hero-text"><?= studio_e($data['brand']['subcopy']) ?></p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="workspace.php">Open workspace</a>
                <a class="btn btn-secondary" href="ideas.php">Browse ideas vault</a>
            </div>
        </div>
        <div class="hero-panel">
            <div class="panel-badge">Current studio pulse</div>
            <div class="hero-metrics">
                <?php foreach ($data['metrics'] as $metric): ?>
                    <article class="metric-card">
                        <span><?= studio_e($metric['label']) ?></span>
                        <strong><?= studio_e($metric['value']) ?></strong>
                        <p><?= studio_e($metric['note']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="section-grid">
        <article class="panel panel-large">
            <div class="panel-head">
                <div>
                    <span class="section-label">Studio rhythm</span>
                    <h2>One polished system for campaign planning, publishing, and review.</h2>
                </div>
                <span class="status-badge">Creative ops ready</span>
            </div>
            <p class="lead-copy">StudioForge is designed like a premium editorial workspace instead of a generic admin panel. It gives content teams a calm overview of active launches, upcoming slots, performance learnings, and assets that need approval.</p>
            <div class="feature-grid">
                <?php foreach ($data['features'] as $feature): ?>
                    <article class="feature-card">
                        <h3><?= studio_e($feature['title']) ?></h3>
                        <p><?= studio_e($feature['copy']) ?></p>
                    </article>
                <?php endforeach; ?>
            </div>
        </article>

        <aside class="panel accent-panel">
            <span class="section-label">This week</span>
            <h2>Publishing focus</h2>
            <div class="mini-list">
                <?php foreach (array_slice($data['calendar'], 0, 4) as $entry): ?>
                    <div class="mini-row">
                        <strong><?= studio_e($entry['day']) ?></strong>
                        <div>
                            <p><?= studio_e($entry['focus']) ?></p>
                            <span><?= studio_e($entry['channel']) ?> at <?= studio_e($entry['time']) ?></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </aside>
    </section>

    <section class="section-grid narrow-gap">
        <article class="panel">
            <div class="panel-head">
                <div>
                    <span class="section-label">Campaign lineup</span>
                    <h2>Active launch rooms</h2>
                </div>
            </div>
            <div class="campaign-stack">
                <?php foreach ($data['campaigns'] as $campaign): ?>
                    <article class="campaign-card">
                        <div class="campaign-topline">
                            <div>
                                <h3><?= studio_e($campaign['name']) ?></h3>
                                <p><?= studio_e($campaign['summary']) ?></p>
                            </div>
                            <span class="chip"><?= studio_e($campaign['channel']) ?></span>
                        </div>
                        <div class="campaign-meta">
                            <span>Owner: <?= studio_e($campaign['owner']) ?></span>
                            <span><?= studio_e((string) $campaign['progress']) ?>% complete</span>
                        </div>
                        <div class="progress-track">
                            <div class="progress-bar" style="width: <?= studio_e((string) $campaign['progress']) ?>%"></div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </article>

        <article class="panel">
            <div class="panel-head">
                <div>
                    <span class="section-label">Workflow</span>
                    <h2>Approval lanes</h2>
                </div>
            </div>
            <div class="kanban">
                <?php foreach ($data['pipeline'] as $lane => $items): ?>
                    <section class="kanban-lane">
                        <h3><?= studio_e($lane) ?></h3>
                        <?php foreach ($items as $item): ?>
                            <div class="kanban-card"><?= studio_e($item) ?></div>
                        <?php endforeach; ?>
                    </section>
                <?php endforeach; ?>
            </div>
        </article>
    </section>
</main>
<?php studio_render_footer(); ?>
