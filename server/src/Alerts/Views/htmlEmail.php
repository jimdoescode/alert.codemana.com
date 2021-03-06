<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html lang="en">
    <head>
        <title>CodeMana Alert</title>
    </head>
    <body>
<?php foreach ($patchFiles as $file): ?>
        <div style="width:99%;overflow-x:auto;border:1px solid #ddd;margin-bottom:30px;">
            <table style="border-collapse:collapse;overflow:visible;">
                <thead>
                    <tr>
                        <td colspan="3" style="padding:5px 10px;background-color:#f7f7f7;border-bottom:1px solid #d8d8d8;">
                            <div style="color:#999;float:right;line-height:32px;font-size:12px;font-family:Consolas,'Liberation Mono',Menlo,Courier,monospace;font-style:italic;">
                                Editor<?=count($file->editors) !== 1 ? 's' : '';?>: <?=empty($file->editors) ? 'Unknown' : implode(',&nbsp;', $file->editors);?>
                            </div>
                            <div style="color:#999;float:left;line-height:32px;font-size:12px;font-family:Consolas,'Liberation Mono',Menlo,Courier,monospace;">
                                <?=$file->name;?>
                            </div>
                        </td>
                    </tr>
                </thead>
                <tbody>
    <?php foreach ($file->chunks as $chunk): ?>
                    <tr style="background-color:#eee;color:#999;">
                        <td colspan="2" style="font-family:Consolas,'Liberation Mono',Menlo,Courier,monospace;font-size:12px;line-height:18px;vertical-align:top;text-align: center;padding-left:10px;padding-right:10px;border-right:1px solid #ddd;">
                            ...
                        </td>
                        <td style="font-family:Consolas,'Liberation Mono',Menlo,Courier,monospace;font-size:12px;line-height:18px;vertical-align:top;padding-left:10px;">
                            <?=$chunk->header;?>
                        </td>
                    </tr>
        <?php foreach ($chunk->lines as $line): ?>
                    <tr style="background-color:<?=$line->isRemoved ? '#f99' : ($line->isAdded ? '#9e9' : '#fff');?>;">
                        <td style="color:#888;width:1%;min-width:25px;font-family:Consolas,'Liberation Mono',Menlo,Courier,monospace;font-size:12px;line-height:18px;vertical-align:top;text-align:right;padding-left:10px;padding-right:10px;border-right:1px solid <?=$line->isRemoved ? '#f88' : ($line->isAdded ? '#7d7' : '#eee');?>;">
                            <?=$line->oldNumber;?>
                        </td>
                        <td style="color:#888;width:1%;min-width:25px;font-family:Consolas,'Liberation Mono',Menlo,Courier,monospace;font-size:12px;line-height:18px;vertical-align:top;text-align:right;padding-left:10px;padding-right:10px;border-right:1px solid <?=$line->isRemoved ? '#f88' : ($line->isAdded ? '#7d7' : '#eee');?>;">
                            <?=$line->newNumber;?>
                        </td>
                        <td style="color:#444;font-family:Consolas,'Liberation Mono',Menlo,Courier,monospace;font-size:12px;line-height:18px;vertical-align:top;padding-left:10px;">
                            <pre style="margin:0;white-space:pre !important;overflow:visible;"><code style="white-space:pre !important;"><?=$line->parsed;?></code></pre>
                        </td>
                    </tr>
        <?php endforeach; ?>
    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
<?php endforeach; ?>
    </body>
</html>
