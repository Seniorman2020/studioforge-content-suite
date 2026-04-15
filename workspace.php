<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/layout.php';

$data = studio_data();

studio_render_header(
    'workspace',
    'Workspace | StudioForge',
    'Workspace dashboard for Nigerian campaigns, approvals, publishing tasks, and creative operations.'
);
?>
<main>
    <section class="page-hero page-hero-tight">
        <div>
            <span class="eyebrow">Workspace</span>
            <h1>Keep every Nigerian campaign moving without clutter.</h1>
            <p>Track launch rooms, move assets through review, and keep your team aligned on what should go live next.</p>
        </div>
        <div class="hero-note">
            <strong>Naija operating style</strong>
            <p>Keep the work clear, sharp, and easy to scan so Lagos launches, Abuja promos, and weekend pushes do not get lost in noise.</p>
        </div>
    </section>

    <section class="metric-strip">
        <?php foreach ($data['analytics'] as $metric): ?>
            <article class="metric-card metric-inline">
                <span><?= studio_e($metric['label']) ?></span>
                <strong><?= studio_e($metric['value']) ?></strong>
                <p><?= studio_e($metric['delta']) ?> vs last week</p>
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
                <span class="status-badge">3 live priorities</span>
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
                    <h2>Assets waiting for sign-off</h2>
                </div>
            </div>
            <div class="review-list">
                <div class="review-card">
                    <strong>Easter offer reel storyboard</strong>
                    <p>Needs final approval before export, caption lock, and paid boost setup.</p>
                    <span>Due by 3:00 PM</span>
                </div>
                <div class="review-card">
                    <strong>Buyer trust newsletter</strong>
                    <p>Needs one more tone pass so the message sounds local, clean, and sales-ready.</p>
                    <span>Due by 10:00 AM</span>
                </div>
                <div class="review-card">
                    <strong>Vendor spotlight captions</strong>
                    <p>Final partner confirmation is pending before the post enters scheduling.</p>
                    <span>Due by 1:00 PM</span>
                </div>
            </div>
        </article>
    </section>

    <section class="two-column">
        <article class="panel">
            <div class="panel-head">
                <div>
                    <span class="section-label">Production checklist</span>
                    <h2>Today on the desk</h2>
                </div>
            </div>
            <div class="timeline-list">
                <div class="timeline-item">
                    <strong>08:30</strong>
                    <p>Review Easter hook options for the carousel draft and assign short cut-down clips.</p>
                </div>
                <div class="timeline-item">
                    <strong>11:00</strong>
                    <p>Approve the vendor spotlight story sequence and confirm the last copy edits.</p>
                </div>
                <div class="timeline-item">
                    <strong>14:00</strong>
                    <p>Check yesterday's numbers and mark the winning hooks for reuse across channels.</p>
                </div>
                <div class="timeline-item">
                    <strong>16:30</strong>
                    <p>Schedule the Friday market recap after exports and links are fully locked.</p>
                </div>
            </div>
        </article>

        <article class="panel accent-panel">
            <span class="section-label">Voice guide</span>
            <h2>Nigerian content pillars</h2>
            <div class="tag-cloud">
                <?php foreach ($data['pillars'] as $pillar): ?>
                    <span class="tag"><?= studio_e($pillar) ?></span>
                <?php endforeach; ?>
            </div>
            <p class="lead-copy small-copy">Every workflow here is built to sound clear, local, and believable while still looking polished enough for premium brands and fast-moving teams.</p>
        </article>
    </section>
</main>
<?php studio_render_footer(); ?>
