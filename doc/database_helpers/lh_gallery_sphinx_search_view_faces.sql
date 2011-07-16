CREATE VIEW `lh_gallery_sphinx_search_view` AS select 

`lh_gallery_sphinx_search`.`id` AS `id`,
`lh_gallery_albums`.`title` AS `album_title`,
`lh_gallery_albums`.`description` AS `album_description`,
`lh_gallery_albums`.`keyword` AS `album_keyword`,
`lh_gallery_categorys`.`name` AS `category_name`,
`lh_gallery_categorys`.`description` AS `category_description`,
`lh_gallery_face_data`.`sphinx_data` AS `face_data`,
`lh_gallery_sphinx_search`.`title` AS `title`,
`lh_gallery_sphinx_search`.`caption` AS `caption`,
`lh_gallery_sphinx_search`.`filename` AS `filename`,
`lh_gallery_sphinx_search`.`file_path` AS `file_path`,
`lh_gallery_sphinx_search`.`mtime` AS `mtime`,
`lh_gallery_sphinx_search`.`comtime` AS `comtime`,
`lh_gallery_sphinx_search`.`rtime` AS `rtime`,
`lh_gallery_sphinx_search`.`pic_rating` AS `pic_rating`,
`lh_gallery_sphinx_search`.`votes` AS `votes`,
`lh_gallery_sphinx_search`.`pwidth` AS `pwidth`,
`lh_gallery_sphinx_search`.`pheight` AS `pheight`,
`lh_gallery_sphinx_search`.`colors` AS `colors`,
`lh_gallery_sphinx_search`.`text_index` AS `text_index`,
`lh_gallery_sphinx_search`.`hits` AS `hits`,
`lh_gallery_sphinx_search`.`pid` AS `pid`,
'imgan' AS `fake_keyword`,
(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld1 ',''))) AS `pld1`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld2 ',''))) AS `pld2`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld3 ',''))) AS `pld3`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld4 ',''))) AS `pld4`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld5 ',''))) AS `pld5`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld6 ',''))) AS `pld6`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld7 ',''))) AS `pld7`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld8 ',''))) AS `pld8`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld9 ',''))) AS `pld9`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld10 ',''))) AS `pld10`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld11 ',''))) AS `pld11`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld12 ',''))) AS `pld12`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld13 ',''))) AS `pld13`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld14 ',''))) AS `pld14`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld15 ',''))) AS `pld15`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld16 ',''))) AS `pld16`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld17 ',''))) AS `pld17`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld18 ',''))) AS `pld18`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld19 ',''))) AS `pld19`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld20 ',''))) AS `pld20`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld21 ',''))) AS `pld21`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld22 ',''))) AS `pld22`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld23 ',''))) AS `pld23`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld24 ',''))) AS `pld24`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld25 ',''))) AS `pld25`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld26 ',''))) AS `pld26`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld27 ',''))) AS `pld27`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld28 ',''))) AS `pld28`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld29 ',''))) AS `pld29`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld30 ',''))) AS `pld30`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld31 ',''))) AS `pld31`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld32 ',''))) AS `pld32`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld33 ',''))) AS `pld33`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld34 ',''))) AS `pld34`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld35 ',''))) AS `pld35`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld36 ',''))) AS `pld36`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld37 ',''))) AS `pld37`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld38 ',''))) AS `pld38`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld39 ',''))) AS `pld39`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld40 ',''))) AS `pld40`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld41 ',''))) AS `pld41`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld42 ',''))) AS `pld42`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld43 ',''))) AS `pld43`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld44 ',''))) AS `pld44`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld45 ',''))) AS `pld45`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld46 ',''))) AS `pld46`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld47 ',''))) AS `pld47`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld48 ',''))) AS `pld48`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld49 ',''))) AS `pld49`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld50 ',''))) AS `pld50`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld51 ',''))) AS `pld51`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld52 ',''))) AS `pld52`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld53 ',''))) AS `pld53`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld54 ',''))) AS `pld54`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld55 ',''))) AS `pld55`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld56 ',''))) AS `pld56`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld57 ',''))) AS `pld57`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld58 ',''))) AS `pld58`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld59 ',''))) AS `pld59`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld6 ',''))) AS `pld60`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld61 ',''))) AS `pld61`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld62 ',''))) AS `pld62`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld63 ',''))) AS `pld63`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld64 ',''))) AS `pld64`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld65 ',''))) AS `pld65`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld66 ',''))) AS `pld66`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld67 ',''))) AS `pld67`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld68 ',''))) AS `pld68`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld69 ',''))) AS `pld69`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld70 ',''))) AS `pld70`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld71 ',''))) AS `pld71`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld72 ',''))) AS `pld72`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld73 ',''))) AS `pld73`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld74 ',''))) AS `pld74`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld75 ',''))) AS `pld75`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld76 ',''))) AS `pld76`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld77 ',''))) AS `pld77`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld78 ',''))) AS `pld78`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld79 ',''))) AS `pld79`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld80 ',''))) AS `pld80`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld81 ',''))) AS `pld81`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld82 ',''))) AS `pld82`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld83 ',''))) AS `pld83`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld84 ',''))) AS `pld84`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld85 ',''))) AS `pld85`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld86 ',''))) AS `pld86`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld87 ',''))) AS `pld87`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld88 ',''))) AS `pld88`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld89 ',''))) AS `pld89`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld90 ',''))) AS `pld90`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld91 ',''))) AS `pld91`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld92 ',''))) AS `pld92`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld93 ',''))) AS `pld93`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld94 ',''))) AS `pld94`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld95 ',''))) AS `pld95`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld96 ',''))) AS `pld96`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld97 ',''))) AS `pld97`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld98 ',''))) AS `pld98`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld99 ',''))) AS `pld99`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld100 ',''))) AS `pld100`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld101 ',''))) AS `pld101`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld102 ',''))) AS `pld102`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld103 ',''))) AS `pld103`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld104 ',''))) AS `pld104`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld105 ',''))) AS `pld105`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld106 ',''))) AS `pld106`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld107 ',''))) AS `pld107`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld108 ',''))) AS `pld108`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld109 ',''))) AS `pld109`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld110 ',''))) AS `pld110`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld111 ',''))) AS `pld111`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld112 ',''))) AS `pld112`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld113 ',''))) AS `pld113`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld114 ',''))) AS `pld114`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld115 ',''))) AS `pld115`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld116 ',''))) AS `pld116`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld117 ',''))) AS `pld117`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld118 ',''))) AS `pld118`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld119 ',''))) AS `pld119`,(`text_index_length` - char_length(replace(`lh_gallery_sphinx_search`.`colors`,'pld120 ',''))) AS `pld120` 
from 
`lh_gallery_sphinx_search`
INNER JOIN `lh_gallery_images` ON `lh_gallery_images`.`pid` = `lh_gallery_sphinx_search`.`id`
INNER JOIN `lh_gallery_albums` ON `lh_gallery_albums`.`aid` = `lh_gallery_images`.`aid`
INNER JOIN `lh_gallery_categorys` ON `lh_gallery_albums`.`category` = `lh_gallery_categorys`.`cid`
LEFT JOIN  `lh_gallery_face_data` ON `lh_gallery_face_data`.`pid` = `lh_gallery_images`.`pid`;