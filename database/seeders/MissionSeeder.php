<?php

namespace Database\Seeders;

use App\Models\Mission;
use Illuminate\Database\Seeder;

class MissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Define the missions and their levels
        $missions = [
            [
                'name' => 'Social Media Influencers',
                'levels' => $this->generateLevels(1000, 100),
            ],
            [
                'name' => 'Content Writers',
                'levels' => $this->generateLevels(2000, 200),
            ],
            [
                'name' => 'SEO Specialists',
                'levels' => $this->generateLevels(5000, 500),
            ],
            [
                'name' => 'Digital Ad Campaigns',
                'levels' => $this->generateLevels(10000, 1000),
            ],
            [
                'name' => 'Brand Ambassadors',
                'levels' => $this->generateLevels(20000, 2000),
            ],
            [
                'name' => 'Video Editors',
                'levels' => $this->generateLevels(30000, 3000),
            ],
            [
                'name' => 'Podcast Hosts',
                'levels' => $this->generateLevels(50000, 5000),
            ],
            [
                'name' => 'Billboard Campaigns',
                'levels' => $this->generateLevels(75000, 7500),
            ],
            [
                'name' => 'Celebrity Endorsements',
                'levels' => $this->generateLevels(100000, 10000),
            ],
            [
                'name' => 'AI Marketing Bots',
                'levels' => $this->generateLevels(150000, 15000),
            ],
            [
                'name' => 'E-Sports Sponsorships',
                'levels' => $this->generateLevels(200000, 20000),
            ],
            [
                'name' => 'Affiliate Partnerships',
                'levels' => $this->generateLevels(300000, 30000),
            ],
            [
                'name' => 'Metaverse Ads',
                'levels' => $this->generateLevels(400000, 40000),
            ],
            [
                'name' => 'Global TV Campaigns',
                'levels' => $this->generateLevels(500000, 50000),
            ],
            [
                'name' => 'AI-Powered Analytics',
                'levels' => $this->generateLevels(600000, 60000),
            ],
            [
                'name' => 'NFT Marketing Campaigns',
                'levels' => $this->generateLevels(750000, 75000),
            ],
            [
                'name' => 'Virtual Events',
                'levels' => $this->generateLevels(1000000, 100000),
            ],
            [
                'name' => 'AI-Driven Personalization',
                'levels' => $this->generateLevels(1500000, 150000),
            ],
            [
                'name' => 'AR Product Demos',
                'levels' => $this->generateLevels(2000000, 200000),
            ],
            [
                'name' => 'AI Marketing Engines',
                'levels' => $this->generateLevels(3000000, 300000),
            ],
            [
                'name' => 'Hologram Ads',
                'levels' => $this->generateLevels(4000000, 400000),
            ],
            [
                'name' => 'Blockchain Analytics Reports',
                'levels' => $this->generateLevels(5000000, 500000),
            ],
            [
                'name' => 'Custom AI Ad Creators',
                'levels' => $this->generateLevels(6000000, 600000),
            ],
            [
                'name' => 'Interactive Marketing Games',
                'levels' => $this->generateLevels(7000000, 700000),
            ],
            [
                'name' => 'Gamified Ad Campaigns',
                'levels' => $this->generateLevels(8000000, 800000),
            ],
            [
                'name' => 'AR/VR Social Campaigns',
                'levels' => $this->generateLevels(10000000, 1000000),
            ],
            [
                'name' => 'Digital Billboards',
                'levels' => $this->generateLevels(12000000, 1200000),
            ],
            [
                'name' => 'Influencer Ad Networks',
                'levels' => $this->generateLevels(15000000, 1500000),
            ],
            [
                'name' => 'Global AI Ad Network',
                'levels' => $this->generateLevels(20000000, 2000000),
            ],
            [
                'name' => 'Press Releases',
                'levels' => $this->generateLevels(5000, 500),
            ],
            [
                'name' => 'Social Media Campaigns',
                'levels' => $this->generateLevels(10000, 1000),
            ],
            [
                'name' => 'Community Moderators',
                'levels' => $this->generateLevels(15000, 1500),
            ],
            [
                'name' => 'Team Expansion',
                'levels' => $this->generateLevels(20000, 2000),
            ],
            [
                'name' => 'Influencer Outreach',
                'levels' => $this->generateLevels(25000, 2500),
            ],
            [
                'name' => 'Event Sponsorships',
                'levels' => $this->generateLevels(30000, 3000),
            ],
            [
                'name' => 'Media Partnerships',
                'levels' => $this->generateLevels(40000, 4000),
            ],
            [
                'name' => 'Ambassador Program',
                'levels' => $this->generateLevels(50000, 5000),
            ],
            [
                'name' => 'Webinars and Tutorials',
                'levels' => $this->generateLevels(60000, 6000),
            ],
            [
                'name' => 'Public Relations Firm',
                'levels' => $this->generateLevels(75000, 7500),
            ],
            [
                'name' => 'Content Creation Team',
                'levels' => $this->generateLevels(90000, 9000),
            ],
            [
                'name' => 'Crisis Management Team',
                'levels' => $this->generateLevels(100000, 10000),
            ],
            [
                'name' => 'Team Leader Training',
                'levels' => $this->generateLevels(120000, 12000),
            ],
            [
                'name' => 'Employee Retention Programs',
                'levels' => $this->generateLevels(150000, 15000),
            ],
            [
                'name' => 'Diversity Hiring Initiatives',
                'levels' => $this->generateLevels(180000, 18000),
            ],
            [
                'name' => 'Team Bonding Events',
                'levels' => $this->generateLevels(200000, 20000),
            ],
            [
                'name' => 'Remote Work Optimization',
                'levels' => $this->generateLevels(250000, 25000),
            ],
            [
                'name' => 'Cross-Training Programs',
                'levels' => $this->generateLevels(300000, 30000),
            ],
            [
                'name' => 'HR Automation Tools',
                'levels' => $this->generateLevels(400000, 40000),
            ],
            [
                'name' => 'AI Recruiting Tools',
                'levels' => $this->generateLevels(500000, 50000),
            ],
            [
                'name' => 'Corporate Retreats',
                'levels' => $this->generateLevels(600000, 60000),
            ],
            [
                'name' => 'Employee Stock Options',
                'levels' => $this->generateLevels(700000, 70000),
            ],
            [
                'name' => 'Leadership Development Programs',
                'levels' => $this->generateLevels(800000, 80000),
            ],
            [
                'name' => 'Employee Wellness Programs',
                'levels' => $this->generateLevels(1000000, 100000),
            ],
            [
                'name' => 'Employee Feedback Systems',
                'levels' => $this->generateLevels(1200000, 120000),
            ],
            [
                'name' => 'High-Performance Teams',
                'levels' => $this->generateLevels(1500000, 150000),
            ],
            [
                'name' => 'Annual Training Plans',
                'levels' => $this->generateLevels(2000000, 200000),
            ],
            [
                'name' => 'Advanced Recruiting Tools',
                'levels' => $this->generateLevels(2500000, 250000),
            ],
            [
                'name' => 'AI-Powered PR Systems',
                'levels' => $this->generateLevels(3000000, 300000),
            ],
            [
                'name' => 'Global Team Network',
                'levels' => $this->generateLevels(4000000, 400000),
            ],
            [
                'name' => 'Basic Compliance Checklists',
                'levels' => $this->generateLevels(10000, 1000),
            ],
            [
                'name' => 'Contract Drafting Templates',
                'levels' => $this->generateLevels(15000, 1500),
            ],
            [
                'name' => 'Trademark Registration',
                'levels' => $this->generateLevels(25000, 2500),
            ],
            [
                'name' => 'Legal Document Storage',
                'levels' => $this->generateLevels(35000, 3500),
            ],
            [
                'name' => 'Employment Agreements',
                'levels' => $this->generateLevels(50000, 5000),
            ],
            [
                'name' => 'Intellectual Property Management',
                'levels' => $this->generateLevels(70000, 7000),
            ],
            [
                'name' => 'Tax Compliance Systems',
                'levels' => $this->generateLevels(100000, 10000),
            ],
            [
                'name' => 'Litigation Risk Analysis',
                'levels' => $this->generateLevels(120000, 12000),
            ],
            [
                'name' => 'GDPR Compliance Systems',
                'levels' => $this->generateLevels(150000, 15000),
            ],
            [
                'name' => 'Patent Filing Services',
                'levels' => $this->generateLevels(200000, 20000),
            ],
            [
                'name' => 'Legal Automation Tools',
                'levels' => $this->generateLevels(300000, 30000),
            ],
            [
                'name' => 'Regulatory Filing Systems',
                'levels' => $this->generateLevels(400000, 40000),
            ],
            [
                'name' => 'Compliance Audit Services',
                'levels' => $this->generateLevels(500000, 50000),
            ],
            [
                'name' => 'AI-Powered Legal Advisors',
                'levels' => $this->generateLevels(600000, 60000),
            ],
            [
                'name' => 'Global Trade Compliance Tools',
                'levels' => $this->generateLevels(750000, 75000),
            ],
            [
                'name' => 'Environmental Compliance Systems',
                'levels' => $this->generateLevels(1000000, 100000),
            ],
            [
                'name' => 'Anti-Piracy Measures',
                'levels' => $this->generateLevels(1500000, 150000),
            ],
            [
                'name' => 'Global Arbitration Services',
                'levels' => $this->generateLevels(2000000, 200000),
            ],
            [
                'name' => 'Cross-Border Compliance Tools',
                'levels' => $this->generateLevels(2500000, 250000),
            ],
            [
                'name' => 'Corporate Governance Services',
                'levels' => $this->generateLevels(3000000, 300000),
            ],
            [
                'name' => 'AI Legal Systems',
                'levels' => $this->generateLevels(3500000, 350000),
            ],
            [
                'name' => 'Litigation Defense Networks',
                'levels' => $this->generateLevels(4000000, 400000),
            ],
            [
                'name' => 'Risk Assessment Tools',
                'levels' => $this->generateLevels(4500000, 450000),
            ],
            [
                'name' => 'Decentralized Legal Platforms',
                'levels' => $this->generateLevels(5000000, 500000),
            ],
            [
                'name' => 'Global Legal Network',
                'levels' => $this->generateLevels(6000000, 600000),
            ],
            [
                'name' => 'Blockchain Legal Services',
                'levels' => $this->generateLevels(7000000, 700000),
            ],
            [
                'name' => 'Intergovernmental Compliance Platforms',
                'levels' => $this->generateLevels(8000000, 800000),
            ],
            [
                'name' => 'International Arbitration Platforms',
                'levels' => $this->generateLevels(9000000, 900000),
            ],
            [
                'name' => 'Global Compliance AI Systems',
                'levels' => $this->generateLevels(10000000, 1000000),
            ],
            [
                'name' => 'Ultimate Legal AI Network',
                'levels' => $this->generateLevels(12000000, 1200000),
            ],
            [
                'name' => 'Blockchain Explorers',
                'levels' => $this->generateLevels(10000, 1000),
            ],
            [
                'name' => 'Smart Contract Development',
                'levels' => $this->generateLevels(20000, 2000),
            ],
            [
                'name' => 'DeFi Staking Programs',
                'levels' => $this->generateLevels(30000, 3000),
            ],
            [
                'name' => 'Decentralized Exchange Listings',
                'levels' => $this->generateLevels(50000, 5000),
            ],
            [
                'name' => 'NFT Marketplaces',
                'levels' => $this->generateLevels(75000, 7500),
            ],
            [
                'name' => 'Metaverse Land Sales',
                'levels' => $this->generateLevels(100000, 10000),
            ],
            [
                'name' => 'Web3 Gaming Integrations',
                'levels' => $this->generateLevels(150000, 15000),
            ],
            [
                'name' => 'Cross-Chain Bridges',
                'levels' => $this->generateLevels(200000, 20000),
            ],
            [
                'name' => 'DAO Governance Tools',
                'levels' => $this->generateLevels(250000, 25000),
            ],
            [
                'name' => 'Web3 Identity Solutions',
                'levels' => $this->generateLevels(300000, 30000),
            ],
            [
                'name' => 'Layer-2 Scaling Solutions',
                'levels' => $this->generateLevels(350000, 35000),
            ],
            [
                'name' => 'DeFi Yield Farming Platforms',
                'levels' => $this->generateLevels(400000, 40000),
            ],
            [
                'name' => 'Zero-Knowledge Proof Solutions',
                'levels' => $this->generateLevels(500000, 50000),
            ],
            [
                'name' => 'Cross-Network Validators',
                'levels' => $this->generateLevels(600000, 60000),
            ],
            [
                'name' => 'Web3 Asset Lending Platforms',
                'levels' => $this->generateLevels(750000, 75000),
            ],
            [
                'name' => 'NFT Lending Protocols',
                'levels' => $this->generateLevels(1000000, 100000),
            ],
            [
                'name' => 'Quantum Blockchain Nodes',
                'levels' => $this->generateLevels(1500000, 150000),
            ],
            [
                'name' => 'Decentralized AI Tools',
                'levels' => $this->generateLevels(2000000, 200000),
            ],
            [
                'name' => 'Web3 Insurance Platforms',
                'levels' => $this->generateLevels(2500000, 250000),
            ],
            [
                'name' => 'Metaverse Payment Solutions',
                'levels' => $this->generateLevels(3000000, 300000),
            ],
            [
                'name' => 'AI-Driven Web3 Analytics',
                'levels' => $this->generateLevels(3500000, 350000),
            ],
            [
                'name' => 'Cross-Metaverse Asset Transfers',
                'levels' => $this->generateLevels(4000000, 400000),
            ],
            [
                'name' => 'Tokenized Real Estate Platforms',
                'levels' => $this->generateLevels(4500000, 450000),
            ],
            [
                'name' => 'AI-Powered DAO Management',
                'levels' => $this->generateLevels(5000000, 500000),
            ],
            [
                'name' => 'Universal Wallet Systems',
                'levels' => $this->generateLevels(6000000, 600000),
            ],
            [
                'name' => 'Quantum-Enabled Security Tools',
                'levels' => $this->generateLevels(7000000, 700000),
            ],
            [
                'name' => 'Blockchain Gaming Ecosystems',
                'levels' => $this->generateLevels(8000000, 800000),
            ],
            [
                'name' => 'AI-Powered Staking Tools',
                'levels' => $this->generateLevels(9000000, 900000),
            ],
            [
                'name' => 'Global Web3 Infrastructure',
                'levels' => $this->generateLevels(10000000, 1000000),
            ],
            [
                'name' => 'AI-Powered Universal Network',
                'levels' => $this->generateLevels(12000000, 1200000),
            ],
            [
                'name' => 'Rare Artifact Discovery',
                'levels' => $this->generateLevels(100000, 10000),
            ],
            [
                'name' => 'Legendary Quest Expeditions',
                'levels' => $this->generateLevels(200000, 20000),
            ],
            [
                'name' => 'Treasure Vaults Mining',
                'levels' => $this->generateLevels(300000, 30000),
            ],
            [
                'name' => 'Galactic Relic Recovery',
                'levels' => $this->generateLevels(500000, 50000),
            ],
            [
                'name' => 'AI-Enhanced Treasure Hunts',
                'levels' => $this->generateLevels(750000, 75000),
            ],
            [
                'name' => 'Cosmic Data Mining',
                'levels' => $this->generateLevels(1000000, 100000),
            ],
            [
                'name' => 'Quantum Artifact Discovery',
                'levels' => $this->generateLevels(1500000, 150000),
            ],
            [
                'name' => 'Galactic Energy Farming',
                'levels' => $this->generateLevels(2000000, 200000),
            ],
            [
                'name' => 'AI-Powered Relic Scans',
                'levels' => $this->generateLevels(2500000, 250000),
            ],
            [
                'name' => 'Ultimate Galactic Network',
                'levels' => $this->generateLevels(3000000, 300000),
            ],
            [
                'name' => 'Intergalactic Trading Post',
                'levels' => $this->generateLevels(3500000, 350000),
            ],
            [
                'name' => 'AI-Powered Galaxy Map',
                'levels' => $this->generateLevels(4000000, 400000),
            ],
            [
                'name' => 'Dimensional Rift Mining',
                'levels' => $this->generateLevels(4500000, 450000),
            ],
            [
                'name' => 'AI-Powered Multiverse Portal',
                'levels' => $this->generateLevels(5000000, 500000),
            ],
            [
                'name' => 'Stellar Resource Harvester',
                'levels' => $this->generateLevels(6000000, 600000),
            ],
            [
                'name' => 'Time Crystal Harvesting',
                'levels' => $this->generateLevels(7000000, 700000),
            ],
            [
                'name' => 'Galactic Civilization Exchange',
                'levels' => $this->generateLevels(8000000, 800000),
            ],
            [
                'name' => 'Infinite Energy Reactor',
                'levels' => $this->generateLevels(9000000, 900000),
            ],
            [
                'name' => 'Ethereal Currency Vault',
                'levels' => $this->generateLevels(10000000, 1000000),
            ],
            [
                'name' => 'Ultimate Multiverse Network',
                'levels' => $this->generateLevels(12000000, 1200000),
            ],
            [
                'name' => 'Eternal AI Network',
                'levels' => $this->generateLevels(13000000, 1300000),
            ],
            [
                'name' => 'Stellar Energy Matrix',
                'levels' => $this->generateLevels(14000000, 1400000),
            ],
            [
                'name' => 'Galactic Trade Hubs',
                'levels' => $this->generateLevels(15000000, 1500000),
            ],
            [
                'name' => 'AI-Powered Resource Generators',
                'levels' => $this->generateLevels(16000000, 1600000),
            ],
            [
                'name' => 'Celestial Vault Systems',
                'levels' => $this->generateLevels(17000000, 1700000),
            ],
            [
                'name' => 'Ethereal Relic Mining',
                'levels' => $this->generateLevels(18000000, 1800000),
            ],
            [
                'name' => 'Dimensional Resource Networks',
                'levels' => $this->generateLevels(20000000, 2000000),
            ],
            [
                'name' => 'Quantum Mining Network',
                'levels' => $this->generateLevels(22000000, 2200000),
            ],
            [
                'name' => 'Multiverse Energy Grid',
                'levels' => $this->generateLevels(25000000, 2500000),
            ],
            [
                'name' => 'Supreme Galactic Network',
                'levels' => $this->generateLevels(30000000, 3000000),
            ],
            
        ];

        // Cycle through the images
        $images = [
            '/images/missions/1.png',
            '/images/missions/2.png',
            '/images/missions/3.png',
        ];

        // Seed the missions and their levels
        foreach ($missions as $index => $missionData) {
            $mission = Mission::create([
                'name' => $missionData['name'],
                'mission_type_id' => 1, // Set mission_type_id to 1 for all
                'image' => $images[$index % count($images)], // Cycle through images
            ]);

            $mission->levels()->createMany($missionData['levels']);
        }
    }

    /**
     * Generate levels for a mission.
     *
     * @param int $baseCost
     * @param int $baseProduction
     * @return array
     */
    private function generateLevels(int $baseCost, int $baseProduction): array
    {
        $levels = [];
        for ($i = 1; $i <= 10; $i++) {
            $levels[] = [
                'level' => $i,
                'cost' => $baseCost * $i,
                'production_per_hour' => $baseProduction * $i,
            ];
        }

        return $levels;
    }
}
