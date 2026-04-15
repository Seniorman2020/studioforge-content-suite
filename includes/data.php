<?php
declare(strict_types=1);

function studio_data(): array
{
    static $data = null;

    if ($data !== null) {
        return $data;
    }

    $data = [
        'brand' => [
            'name' => 'StudioForge',
            'headline' => 'Run sharp Nigerian campaigns from one bright, organised workspace.',
            'tagline' => 'Content Operations Suite for Nigerian Teams',
            'subcopy' => 'A clean planning hub for Nigerian teams managing Lagos launches, Abuja activations, WhatsApp promos, approval flow, and weekly content without the usual chaos.',
        ],
        'company' => [
            'name' => 'Seniorman Computers',
            'email' => 'cniorman6@gmail.com',
            'phone' => '08164616531',
            'license' => 'MIT License',
        ],
        'pages' => [
            'index' => ['label' => 'Overview', 'file' => 'index.php'],
            'workspace' => ['label' => 'Workspace', 'file' => 'workspace.php'],
            'calendar' => ['label' => 'Calendar', 'file' => 'calendar.php'],
            'analytics' => ['label' => 'Analytics', 'file' => 'analytics.php'],
            'ideas' => ['label' => 'Idea Bank', 'file' => 'ideas.php'],
        ],
        'metrics' => [
            ['label' => 'Campaigns in motion', 'value' => '12', 'note' => 'Across Lagos, Abuja, Port Harcourt, and online-first pushes'],
            ['label' => 'Approval rate', 'value' => '94%', 'note' => 'Faster sign-off for client work, promos, and product drops'],
            ['label' => 'Weekly publishing slots', 'value' => '31', 'note' => 'Spread across Reels, WhatsApp, carousels, and email'],
        ],
        'features' => [
            [
                'title' => 'Campaign rooms',
                'copy' => 'Keep every launch in one clear space with goals, market focus, delivery dates, owners, and live progress.',
            ],
            [
                'title' => 'Naija idea bank',
                'copy' => 'Store local hooks, holiday angles, customer stories, and fast campaign sparks before they vanish, then shape them into the right format.',
            ],
            [
                'title' => 'Approval flow',
                'copy' => 'Move from draft to review to publishing without losing context, assets, or the exact feedback that matters.',
            ],
            [
                'title' => 'Performance gist',
                'copy' => 'See the topics, formats, and posting windows Nigerian audiences respond to so the next push lands better.',
            ],
        ],
        'campaigns' => [
            [
                'name' => 'Easter Market Rush',
                'owner' => 'Lagos content desk',
                'channel' => 'Instagram + WhatsApp',
                'progress' => 82,
                'summary' => 'A seven-day promo run for Easter orders with teaser reels, customer proof, and fast WhatsApp conversion follow-up.',
            ],
            [
                'name' => 'Campus Ambassador Drive',
                'owner' => 'Abuja growth team',
                'channel' => 'TikTok + X',
                'progress' => 61,
                'summary' => 'A student-focused awareness push using creator clips, ambassador updates, and short threads built for quick sharing.',
            ],
            [
                'name' => 'Owambe Vendor Spotlight',
                'owner' => 'Community studio',
                'channel' => 'Stories + Email',
                'progress' => 47,
                'summary' => 'A celebration-season content stream highlighting vendors, event energy, and customer-ready booking prompts.',
            ],
        ],
        'pipeline' => [
            'Drafting' => [
                'Sallah promo hook options',
                'Lekki pop-up recap notes',
                'Campus ambassador welcome sequence',
            ],
            'In review' => [
                'Easter offer reel storyboard',
                'Vendor spotlight photo selects',
                'WhatsApp broadcast copy',
            ],
            'Ready to schedule' => [
                'Customer testimony carousel',
                'Friday market update',
                'Weekend order reminder mailer',
            ],
        ],
        'calendar' => [
            ['day' => 'Mon', 'focus' => 'Lagos launch teaser', 'channel' => 'Reel', 'time' => '9:00 AM', 'owner' => 'Tolu'],
            ['day' => 'Tue', 'focus' => 'SME growth thread', 'channel' => 'X', 'time' => '11:30 AM', 'owner' => 'Amaka'],
            ['day' => 'Wed', 'focus' => 'Customer question box', 'channel' => 'Stories', 'time' => '1:00 PM', 'owner' => 'Chidi'],
            ['day' => 'Thu', 'focus' => 'Buyer trust email', 'channel' => 'Newsletter', 'time' => '8:15 AM', 'owner' => 'Tolu'],
            ['day' => 'Fri', 'focus' => 'Market-week recap', 'channel' => 'Carousel', 'time' => '4:00 PM', 'owner' => 'Amaka'],
            ['day' => 'Sat', 'focus' => 'Weekend sales push', 'channel' => 'TikTok', 'time' => '6:30 PM', 'owner' => 'Chidi'],
        ],
        'analytics' => [
            ['label' => 'Audience reach', 'value' => '184K', 'delta' => '+18%'],
            ['label' => 'Shares and saves', 'value' => '8.2K', 'delta' => '+11%'],
            ['label' => 'DM and link actions', 'value' => '3.1K', 'delta' => '+24%'],
            ['label' => 'Email click rate', 'value' => '7.8%', 'delta' => '+1.3 pts'],
        ],
        'experiments' => [
            ['title' => 'Pidgin-led opening hooks', 'result' => 'The strongest opener for relatable short-form content this month', 'impact' => 'Share rate +16%'],
            ['title' => 'Founder walk-through clips', 'result' => 'Held audience attention across Stories and Reels longer than static explainers', 'impact' => 'Completion +21%'],
            ['title' => 'Bright white product scenes', 'result' => 'Made offers feel cleaner, sharper, and easier to trust on landing pages', 'impact' => 'Bounce -9%'],
        ],
        'ideas' => [
            ['title' => 'What every Lagos buyer checks before clicking pay', 'type' => 'Carousel', 'energy' => 'High intent', 'summary' => 'A practical swipe sequence that shows the trust signals Nigerian buyers look for before they place an order.'],
            ['title' => 'One Saturday shoot, ten Naija-ready assets', 'type' => 'Reel', 'energy' => 'Conversion', 'summary' => 'Break one production day into short clips, quote cards, customer proof, and promo edits for the full week.'],
            ['title' => 'How to sound premium without sounding foreign', 'type' => 'Newsletter', 'energy' => 'Brand depth', 'summary' => 'A clean editorial note on speaking with confidence while still sounding local, warm, and believable.'],
            ['title' => 'Three visuals that make a promo look trusted fast', 'type' => 'Story set', 'energy' => 'Inspiration', 'summary' => 'A quick reference built around white space, product clarity, and familiar Nigerian buying cues.'],
        ],
        'pillars' => [
            'Local market insight',
            'Trust-building storytelling',
            'Community participation',
            'Results-led iteration',
        ],
    ];

    return $data;
}
