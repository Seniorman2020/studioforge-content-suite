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
            'headline' => 'Shape ideas into polished campaigns with one calm, beautiful workspace.',
            'tagline' => 'Content Operations Suite',
            'subcopy' => 'A content operations platform for teams planning calendars, managing approvals, tracking campaign momentum, and turning scattered ideas into repeatable growth.',
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
            'ideas' => ['label' => 'Ideas Vault', 'file' => 'ideas.php'],
        ],
        'metrics' => [
            ['label' => 'Campaigns in motion', 'value' => '12', 'note' => 'Across social, newsletters, and launch funnels'],
            ['label' => 'Content approval rate', 'value' => '94%', 'note' => 'Built around cleaner handoff and faster reviews'],
            ['label' => 'Weekly publishing slots', 'value' => '31', 'note' => 'Balanced across short-form, carousel, and email'],
        ],
        'features' => [
            [
                'title' => 'Campaign rooms',
                'copy' => 'Keep every launch inside a focused workspace with goals, channel plans, deadlines, owners, and live progress.',
            ],
            [
                'title' => 'Ideas vault',
                'copy' => 'Save hooks, trends, references, and quick campaign directions before they disappear, then group them into formats that fit your brand.',
            ],
            [
                'title' => 'Approval lanes',
                'copy' => 'Move from draft to review to scheduled without losing context, assets, or comments along the way.',
            ],
            [
                'title' => 'Performance snapshots',
                'copy' => 'See what themes, formats, and posting windows are carrying attention so the next sprint gets smarter.',
            ],
        ],
        'campaigns' => [
            [
                'name' => 'Quiet Launch Week',
                'owner' => 'Editorial team',
                'channel' => 'Instagram + Email',
                'progress' => 82,
                'summary' => 'A seven-day rollout for the spring capsule story with teaser reels, a landing page warmup, and founder notes.',
            ],
            [
                'name' => 'Behind The Build',
                'owner' => 'Brand studio',
                'channel' => 'LinkedIn + Blog',
                'progress' => 61,
                'summary' => 'A trust-building series that turns process notes into strong professional storytelling and brand credibility.',
            ],
            [
                'name' => 'Creator Collab Drop',
                'owner' => 'Partnership desk',
                'channel' => 'TikTok + Stories',
                'progress' => 47,
                'summary' => 'A collaborative campaign featuring co-created clips, release reminders, and cross-posted audience prompts.',
            ],
        ],
        'pipeline' => [
            'Drafting' => [
                'Spring editorial moodboard',
                'Founder voice memo transcript',
                'Five-hook carousel outline',
            ],
            'In review' => [
                'Launch reel storyboard',
                'Product close-up image selects',
                'Newsletter subject line options',
            ],
            'Ready to schedule' => [
                'Community spotlight post',
                'Client proof snippets',
                'Friday recap email',
            ],
        ],
        'calendar' => [
            ['day' => 'Mon', 'focus' => 'Launch anchor', 'channel' => 'Reel', 'time' => '9:00 AM', 'owner' => 'Mira'],
            ['day' => 'Tue', 'focus' => 'Authority thread', 'channel' => 'LinkedIn', 'time' => '11:30 AM', 'owner' => 'Dami'],
            ['day' => 'Wed', 'focus' => 'Audience question', 'channel' => 'Stories', 'time' => '1:00 PM', 'owner' => 'Zee'],
            ['day' => 'Thu', 'focus' => 'Deep-dive email', 'channel' => 'Newsletter', 'time' => '8:15 AM', 'owner' => 'Mira'],
            ['day' => 'Fri', 'focus' => 'Studio recap', 'channel' => 'Carousel', 'time' => '4:00 PM', 'owner' => 'Dami'],
            ['day' => 'Sat', 'focus' => 'Community remix', 'channel' => 'TikTok', 'time' => '6:30 PM', 'owner' => 'Zee'],
        ],
        'analytics' => [
            ['label' => 'Audience reach', 'value' => '184K', 'delta' => '+18%'],
            ['label' => 'Saves and shares', 'value' => '8.2K', 'delta' => '+11%'],
            ['label' => 'Profile actions', 'value' => '3.1K', 'delta' => '+24%'],
            ['label' => 'Email CTR', 'value' => '7.8%', 'delta' => '+1.3 pts'],
        ],
        'experiments' => [
            ['title' => 'Short hooks under 8 words', 'result' => 'Best-performing opening format this month', 'impact' => 'Share rate +16%'],
            ['title' => 'Founder-led voice notes', 'result' => 'High retention across story slides 1 to 4', 'impact' => 'Completion +21%'],
            ['title' => 'Muted neutral backdrops', 'result' => 'Increased product focus and lower bounce on landing pages', 'impact' => 'Bounce -9%'],
        ],
        'ideas' => [
            ['title' => 'What most creators skip before posting', 'type' => 'Carousel', 'energy' => 'High intent', 'summary' => 'Educational sequence with checklist framing and a practical save-worthy payoff.'],
            ['title' => 'One shoot, twelve assets', 'type' => 'Reel', 'energy' => 'Conversion', 'summary' => 'Turn one production day into a multi-platform content ladder with a simple breakdown.'],
            ['title' => 'A voice that feels premium without sounding distant', 'type' => 'Newsletter', 'energy' => 'Brand depth', 'summary' => 'Editorial note on tone design for brands that want warmth and authority together.'],
            ['title' => 'Three visuals that make a launch feel expensive', 'type' => 'Story set', 'energy' => 'Inspiration', 'summary' => 'Fast creative reference pack built around texture, spacing, and disciplined color use.'],
        ],
        'pillars' => [
            'Editorial polish',
            'Behind-the-scenes trust',
            'Audience participation',
            'Performance-led iteration',
        ],
    ];

    return $data;
}
