<?php
declare(strict_types=1);

require_once __DIR__ . '/includes/layout.php';

$data = studio_data();

studio_render_header(
    'calendar',
    'Calendar | StudioForge',
    'Publishing calendar for mapping weekly Nigerian content, channels, time slots, and team ownership.'
);
?>
<main>
    <section class="page-hero">
        <div>
            <span class="eyebrow">Calendar</span>
            <h1>Plan the week in a way your whole team can scan fast.</h1>
            <p>A clean weekly map for Nigerian campaigns, launches, promos, and daily content follow-through.</p>
        </div>
    </section>

    <section class="two-column calendar-layout">
        <article class="panel">
            <div class="panel-head">
                <div>
                    <span class="section-label">Weekly grid</span>
                    <h2>Upcoming publishing slots</h2>
                </div>
            </div>
            <div class="schedule-table">
                <?php foreach ($data['calendar'] as $entry): ?>
                    <div class="schedule-row">
                        <strong><?= studio_e($entry['day']) ?></strong>
                        <div>
                            <p><?= studio_e($entry['focus']) ?></p>
                            <span><?= studio_e($entry['channel']) ?> - <?= studio_e($entry['time']) ?></span>
                        </div>
                        <em><?= studio_e($entry['owner']) ?></em>
                    </div>
                <?php endforeach; ?>
            </div>
        </article>

        <article class="panel accent-panel">
            <span class="section-label">Shoot planning</span>
            <h2>Production clusters</h2>
            <div class="mini-list">
                <div class="mini-row">
                    <strong>A</strong>
                    <div>
                        <p>White-background product session</p>
                        <span>Capture clean stills, detail shots, and looped clips for the promo week.</span>
                    </div>
                </div>
                <div class="mini-row">
                    <strong>B</strong>
                    <div>
                        <p>Founder desk notes</p>
                        <span>Record warm voice-led clips, typing shots, and simple process cutaways.</span>
                    </div>
                </div>
                <div class="mini-row">
                    <strong>C</strong>
                    <div>
                        <p>Customer reply pack</p>
                        <span>Prepare WhatsApp replies, quote cards, and audience prompts for quick posting.</span>
                    </div>
                </div>
            </div>
        </article>
    </section>

    <section class="panel">
        <div class="panel-head">
            <div>
                <span class="section-label">Channel balancing</span>
                <h2>Format distribution</h2>
            </div>
        </div>
        <div class="distribution-grid">
            <article class="distribution-card">
                <strong>Reels</strong>
                <p>Fast hooks and motion-led storytelling for top-of-funnel attention and quick local shareability.</p>
            </article>
            <article class="distribution-card">
                <strong>Carousels</strong>
                <p>Save-worthy education, buyer proof, and process breakdowns that reward slower reading.</p>
            </article>
            <article class="distribution-card">
                <strong>Stories</strong>
                <p>Audience touchpoints, quick context, reply prompts, and launch reminders that feel immediate.</p>
            </article>
            <article class="distribution-card">
                <strong>Newsletter</strong>
                <p>Depth, trust, and stronger conversion moments for subscribers already close to buying.</p>
            </article>
        </div>
    </section>
</main>
<?php studio_render_footer(); ?>
