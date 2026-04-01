<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/layout.php';

$data = studio_data();

studio_render_header(
    'workspace',
    'Workspace | StudioForge',
    'Workspace dashboard for active campaigns, approvals, publishing tasks, and creative operations.'
);
?>
<main>
    <section class="page-hero page-hero-tight">
        <div>
            <span class="eyebrow">Workspace</span>
            <h1>Creative operations without the clutter.</h1>
            <p>Track launch rooms, move assets through review, and keep your team aligned on what gets published next.</p>
        </div>
        <div class="hero-note">
            <strong>Studio principle</strong>
            <p>Design the system around calm visibility, not noise. That means fewer tabs, clearer priorities, and elegant review flow.</p>
        </div>
    </section>

    <section class="metric-strip">
        <?php foreach ($data['analytics'] as $metric): ?>
            <article class="metric-card metric-inline">
                <span><?= studio_e($metric['label']) ?></span>
                <strong><?= studio_e($metric['value']) ?></strong>
                <p><?= studio_e($metric['delta']) ?> vs last cycle</p>
            </article>
        <?php endforeach; ?>
    </section>

    <section class="two-column">
        <article class="panel">
            <div class="panel-head">
                <div>
                    <span class="section-label">Launch rooms</span>
                    <h2>Campaign focus board</h2>
                </div>
                <span class="status-badge">3 priority rooms</span>
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
                            <span><?= studio_e($campaign['owner']) ?></span>
                            <span><?= studio_e((string) $campaign['progress']) ?>%</span>
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
                    <span class="section-label">Review lane</span>
                    <h2>Assets waiting for approval</h2>
                </div>
            </div>
            <div class="review-list">
                <div class="review-card">
                    <strong>Launch reel storyboard</strong>
                    <p>Needs creative director sign-off before export and caption lock.</p>
                    <span>Due in 3 hours</span>
                </div>
                <div class="review-card">
                    <strong>Founder note newsletter</strong>
                    <p>Final tone pass required after subject line selection.</p>
                    <span>Due tomorrow</span>
                </div>
                <div class="review-card">
                    <strong>Partnership teaser captions</strong>
                    <p>Compliance check pending for collaboration mention.</p>
                    <span>Due tomorrow</span>
                </div>
            </div>
        </article>
    </section>

    <section class="two-column">
        <article class="panel">
            <div class="panel-head">
                <div>
                    <span class="section-label">Production checklist</span>
                    <h2>Today in the studio</h2>
                </div>
            </div>
            <div class="timeline-list">
                <div class="timeline-item">
                    <strong>08:30</strong>
                    <p>Review hook options for carousel draft and assign cut-down clips.</p>
                </div>
                <div class="timeline-item">
                    <strong>11:00</strong>
                    <p>Approve story sequence for community remix and confirm copy edits.</p>
                </div>
                <div class="timeline-item">
                    <strong>14:00</strong>
                    <p>Check analytics from yesterday and mark winners for replication.</p>
                </div>
                <div class="timeline-item">
                    <strong>16:30</strong>
                    <p>Schedule Friday recap email after asset exports are locked.</p>
                </div>
            </div>
        </article>

        <article class="panel accent-panel">
            <span class="section-label">Publishing note</span>
            <h2>Editorial voice pillars</h2>
            <div class="tag-cloud">
                <?php foreach ($data['pillars'] as $pillar): ?>
                    <span class="tag"><?= studio_e($pillar) ?></span>
                <?php endforeach; ?>
            </div>
            <p class="lead-copy small-copy">Every output in this concept is anchored in clarity, premium restraint, and stronger audience resonance instead of dashboard clutter.</p>
        </article>
    </section>
</main>
<?php studio_render_footer(); ?>
