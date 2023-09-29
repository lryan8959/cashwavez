<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    private $blogLinks = [
        'https://slashcode.agency/2023/09/enhance-your-online-presence-with-effective-marketing-strategies-2/',
        'https://slashcode.agency/2023/09/revolutionizing-the-entertainment-industry-with-ai-solutions/',
        'https://slashcode.agency/2023/09/unlocking-the-power-of-custom-software-development-for-ai-startups/',
        'https://slashcode.agency/2023/09/empowering-cybersecurity-firms-with-advanced-data-management-services/',
        'https://slashcode.agency/2023/09/empowering-health-and-fitness-centers-with-intelligent-technology-solutions/',
        'https://slashcode.agency/2023/09/unleashing-the-potential-of-ai-startups-cutting-edge-solutions-for-growth/',
        'https://slashcode.agency/2023/09/elevating-software-development-strategies-for-efficient-custom-solutions/',
        'https://slashcode.agency/2023/09/elevating-software-development-strategies-for-efficient-custom-solutions-2/',
        'https://slashcode.agency/2023/09/elevating-software-development-strategies-for-efficient-custom-solutions-3/',
        'https://slashcode.agency/2023/09/elevating-software-development-strategies-for-efficient-custom-solutions-4/',
        'https://slashcode.agency/2023/09/elevating-software-development-strategies-for-efficient-custom-solutions-5/',
        'https://slashcode.agency/2023/09/elevating-software-development-strategies-for-efficient-custom-solutions-6/',
        'https://slashcode.agency/2023/09/elevating-software-development-strategies-for-efficient-custom-solutions-7/',
        'https://slashcode.agency/2023/09/elevating-software-development-strategies-for-efficient-custom-solutions-8/',
        'https://slashcode.agency/2023/09/elevating-software-development-strategies-for-efficient-custom-solutions-9/',
        'https://slashcode.agency/2023/09/elevating-software-development-strategies-for-efficient-custom-solutions-10/',
        'https://slashcode.agency/2023/09/elevating-software-development-strategies-for-efficient-custom-solutions-11/',
        'https://slashcode.agency/2023/09/elevating-software-development-strategies-for-efficient-custom-solutions-12/',
        'https://slashcode.agency/2023/09/elevating-software-development-strategies-for-efficient-custom-solutions-13/',
        'https://slashcode.agency/2023/09/elevating-software-development-strategies-for-efficient-custom-solutions-14/',
        'https://slashcode.agency/2023/09/elevating-software-development-strategies-for-efficient-custom-solutions-15/',
        'https://slashcode.agency/2023/09/elevating-software-development-strategies-for-efficient-custom-solutions-16/',
        'https://slashcode.agency/2023/09/optimizing-health-and-fitness-centers-with-innovative-technology/',
        'https://slashcode.agency/2023/09/unleashing-the-potential-of-ai-technology-for-it-professionals/',
        'https://slashcode.agency/2023/09/driving-business-growth-with-ai-transformation/',
        'https://slashcode.agency/2023/09/navigating-the-digital-age-the-journey-of-a-software-development-company/',
        'https://slashcode.agency/2023/09/empowering-businesses-through-custom-solutions/',
        'https://slashcode.agency/2023/09/maximizing-ai-technology-for-enhanced-entertainment-experiences/',
        'https://slashcode.agency/2023/09/revolutionizing-real-estate-custom-software-solutions-for-agencies/',
        'https://slashcode.agency/2023/09/ensuring-cybersecurity-in-the-digital-age-innovative-solutions-for-business-protection/',
        'https://slashcode.agency/2023/09/transforming-marketing-and-advertising-ai-powered-strategies-for-success/',
        'https://slashcode.agency/2023/09/empowering-health-and-fitness-centers-with-intelligent-technology-solutions-2/',
        'https://slashcode.agency/2023/09/creative-development/',
        'https://slashcode.agency/2023/09/unlocking-the-power-of-ai-for-your-business/',
        'https://slashcode.agency/2023/09/revolutionize-your-entertainment-business-with-ai-solutions/',
        'https://slashcode.agency/2023/09/custom-software-development-transforming-the-real-estate-industry/',
        'https://slashcode.agency/2023/09/ensuring-cybersecurity-for-your-business-in-the-digital-age/',
        'https://slashcode.agency/2023/09/boost-your-marketing-strategy-with-ai-technology/',
        'https://slashcode.agency/2023/09/the-role-of-ai-in-the-health-fitness-industry/',
        'https://slashcode.agency/2023/09/7-must-have-features-for-ai-startups/',
        'https://slashcode.agency/2023/09/enhancing-cybersecurity-for-it-professionals/',
        'https://slashcode.agency/2023/09/unleashing-the-potential-of-ai-in-the-entertainment-industry/',
        'https://slashcode.agency/2023/09/streamlining-data-management-for-business-owners/',
        'https://slashcode.agency/2023/09/the-future-of-technology-embracing-ai-transformation/',
        'https://slashcode.agency/2023/09/web-app-development-a-game-changer-for-entrepreneurs/',
        'https://slashcode.agency/2023/09/stay-ahead-in-the-cybersecurity-industry-with-innovative-solutions/',
        'https://slashcode.agency/2023/09/the-impact-of-ai-in-marketing-and-advertising/',
        'https://slashcode.agency/2023/09/innovative-solutions-for-health-fitness-centers/',
        'https://slashcode.agency/2023/09/innovative-solutions-for-health-fitness-centers-2/',
        'https://slashcode.agency/2023/09/maximizing-business-potential-with-custom-software-development/',
        'https://slashcode.agency/2023/09/harnessing-the-power-of-ai-solutions-for-your-business/',
        'https://slashcode.agency/2023/09/efficient-data-management-services-for-growing-enterprises/',
        'https://slashcode.agency/2023/09/streamlining-operations-with-enterprise-software-solutions/',
        'https://slashcode.agency/2023/09/empowering-your-business-with-ai-technology/',
    ];
    
    public function getRandomBlogLink()
    {
        $randomIndex = array_rand($this->blogLinks);
        $randomLink = $this->blogLinks[$randomIndex];
    
        return response()->json(['link' => $randomLink]);
    }
    
    }
