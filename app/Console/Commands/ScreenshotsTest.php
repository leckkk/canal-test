<?php

namespace App\Console\Commands;

use FFMpeg\Coordinate\TimeCode;
use FFMpeg\FFMpeg;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class ScreenshotsTest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'test:screenshots {--url= : 指定的视频流}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = '测试截取rtmp视频流图片';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $url = $this->option('url') ?? null;
        if (!$url) {
            $this->info('请输入视频流地址 {--url=} ');
        }
        $ffmpeg = FFMpeg::create([
            'ffmpeg.binaries'  => '/usr/bin/ffmpeg',
            'ffprobe.binaries' => '/usr/bin/ffprobe',
            'timeout'          => 3600, // The timeout for the underlying process
            'ffmpeg.threads'   => 12,   // The number of threads that FFMpeg should use
        ]);

        $video = $ffmpeg->open($url);
        $frame = $video->frame(TimeCode::fromSeconds(0));

        $fileName = 'video/' . Str::random(4) . '_' . now()->format('YmdHis') . '.jpg';
        if (!is_dir(storage_path("video"))) {
            mkdir(storage_path("video"), 0755);
        }
        $frame->save(storage_path($fileName));
    }
}
