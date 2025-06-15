<?php

namespace Database\Seeders;


use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;
use database\factories\ServiceFactory; 

class ServiceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
       $datas= [
       //     [
        //     "name"=>"Problematic or Harmful Sexual Behaviour (HSB/PSB)",
        //     "content"=>"<p>Support for children exhibiting sexually harmful or concerning behaviours through structured interventions, safeguarding strategies, and therapeutic engagement.</p>",
        //     "icon"=>"warning.png",
        //     "image"=>'brothers-and-sisters-make-the-best-playmates-2025-04-06-10-06-00-utc.jpg',
        // ],
        [
            "name"=>"Challenging Behaviour / Emotional and Behavioural Difficulties (EBD, SEMH)",
            "content"=>"<p>We work with children exhibiting persistent oppositional behaviour, trauma responses, and severe emotional dysregulation, through positive reinforcement, consistency, and therapeutic care.</p>",
            "icon"=>"love.png",
            "image"=>'they-drive-each-other-crazy-2025-04-06-11-46-41-utc.jpg',
        ],
        [
            "name"=>"Attachment Issues",
            "content"=>"<p>Experienced keyworkers and therapists help children develop healthy attachments, especially those with histories of neglect, loss, or inconsistent care.</p>",
            // "icon"=>"love.png",
            "image"=>'',
        ],
        [
            "name"=>"Absconding and High-Risk Behaviours",
            "content"=>"<p>Moriah provides a secure, supportive environment with de-escalation-trained staff to reduce instances of running away and to address underlying causes of risky behaviour.</p>",
            "icon"=>"finish.png",
            "image"=>'',
        ],
        [
            "name"=>"Self-Harm and Emotional Dysregulation",
            "content"=>"<p>Our trauma-informed approach supports young people who self-injure or struggle with emotional control, offering therapeutic care, emotional safety planning, and mental health referrals.</p>",
            // "icon"=>"love.png",
            "image"=>'',
        ],
        [
            "name"=>"Low Self-Esteem and Confidence",
            "content"=>"<p>Through mentoring, positive reinforcement, and success-based programs, we help children rebuild their sense of self-worth and personal agency.</p>",
            "icon"=>"self-confidence.png",
            "image"=>'',
        ],
        [
            "name"=>"Autism, Asperger Syndrome, and Mild Learning Disabilities",
            "content"=>"<p>We provide tailored care and communication strategies for neurodiverse young people, supporting them with structured routines, sensory-sensitive environments, and educational support.</p>",
            // "icon"=>"love.png",
            "image"=>'',
        ],
        [
            "name"=>"Exposure to Risk or Exploitation",
            "content"=>"<p>We are equipped to care for young people vulnerable to sexual or criminal exploitation, offering protective interventions and multi-agency collaboration to reduce risk and build trust.</p>",
            // "icon"=>"love.png",
            "image"=>'',
        ],
        [
            "name"=>"Criminal Offending or Risk of Offending",
            "content"=>"<p>For young people caught in cycles of crime, we provide structure, positive role models, and targeted intervention programs to promote rehabilitation and accountability.</p>",
            // "icon"=>"love.png",
            "image"=>'',
        ],
        [
            "name"=>"Limited Life Skills and Transitioning to Independence",
            "content"=>"<p>Moriah offers independence preparation programs including cooking, budgeting, health awareness, and job-readiness training for older children approaching adulthood.</p>",
            // "icon"=>"love.png",
            "image"=>'',
        ],
    ];

        foreach ($datas as $data) {
            Service::create($data);
        }
    }
}
