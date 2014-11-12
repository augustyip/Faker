<?php

namespace Faker\Provider\zh_CN;

class Person extends \Faker\Provider\Person
{
    protected static $maleNameFormats = array(
        '{{lastName}}{{firstNameMale}}',
    );

    protected static $femaleNameFormats = array(
        '{{lastName}}{{firstNameFemale}}',
    );

    protected static $lastName = array(
        '任', '彭', '杨', '林', '毛', '胡', '陈', '雷', '龙',
        '丁', '万', '严', '于', '何', '余', '侯', '傅', '冯', '刘', '卢', '史', '叶',
        '吕', '吴', '周', '唐', '夏', '姚', '姜', '孔', '孙', '宋', '崔', '廖',
        '张', '徐', '方', '曹', '曾', '朱', '李', '杜', '梁', '武', '段', '江',
        '汪', '沈', '洪', '潘', '熊', '王', '田', '白', '秦', '程', '罗', '苏',
        '范', '莫', '萧', '董', '蒋', '蔡', '薛', '袁', '覃', '许', '谢', '谭',
        '贺', '贾', '赖', '赵', '邓', '邱', '邵', '邹', '郝', '郭', '金', '钟',
        '钱', '阎', '陆', '陶', '韦', '韩', '顾', '马', '高', '魏', '黄', '黎',
        '龚',
    );

    /**
     * Data origin: http://www.mmbang.com/bang/521/486785
     */
    protected static $firstNameMale = array(
        '靖平', '衡岳', '博易', '承嗣', '琪维', '高昂', '梦文', '凌辉', '承载',
        '成弘', '禄军', '成和', '孟华', '善福', '吉钰', '纪杰', '德惠', '博瀚',
        '清杰', '承允', '德泽', '成文', '洪岳', '成周', '博学', '权鸿', '德水',
        '军舰', '承志', '念泽', '承教', '鸿鸿', '胜俊', '纪江', '博容', '成化',
        '敬波', '高畅', '丹健', '南洋', '德华', '德庸', '如卿', '彬郁', '景盛',
        '玲杰', '成益', '成仁', '波鸿', '军魁', '明举', '德辉', '彭渝', '刘彬',
        '承运', '斌蔚', '博超', '金乐', '康亮', '基灿', '德明', '铭忠', '庆滋',
        '陆涛', '刚豪', '诗军', '承望', '华卫', '俊基', '承德', '德宇', '鹏吉',
        '承泽', '刚捷', '德容', '博涉', '德厚', '刚洁', '波峻', '尚凯', '德海',
        '才英', '博艺', '驰勋', '承天', '博文', '承业', '淇峰', '庆元', '德馨',
        '梦亿', '儒湖', '才俊', '儒林', '凯嘉', '波光', '丘东', '才艺', '杰科',
        '李仁', '经纶', '德佑', '济琛', '圣尧', '承弼', '博涛', '博延', '承颜',
        '宾白', '德义', '成双', '佳圣', '景禄', '成荫', '宾实', '博厚', '斌斌',
        '金源', '德本', '胜基', '德元', '敬魁', '博裕', '荣郑', '博简', '建启',
        '荣振', '承基', '如辉', '成礼', '博实', '继侗', '培源', '楠德', '敬文',
        '博赡', '才哲', '绍成', '承悦', '钦玉', '南伦', '良锋', '善龙', '景田',
        '玖哲', '金甫', '博明', '才良', '来炜', '和峻', '德运', '谨延', '才捷',
        '明轩', '承福', '德润', '成天', '承恩', '成业', '滨海', '丘明', '晋音',
        '基拓', '成济', '博雅', '善华', '承平', '绍继', '宾鸿', '少星', '南陵',
        '德寿', '高岑', '峻伟', '韶杰', '茂奎', '德业', '承安', '汝凯', '承宣',
    );

    /**
     * Data origin: http://www.richyli.com/name/novel.asp
     */
    protected static $firstNameFemale = array(
        '雁楓', '翠夏', '寄柳', '夜白', '念瑤', '綺丹', '雪露', '恨霜', '千雪',
        '谷琴', '谷露', '以煙', '惜萱', '傲凝', '綺夢', '宛竹', '雪風', '水風',
        '雨玉', '易香', '向雲', '沛夢', '半蓉', '夜荷', '沛安', '向風', '新瑤',
        '安旋', '懷荷', '迎露', '笑云', '曉槐', '語云', '向卉', '水玉', '谷萍',
        '盼雪', '春安', '幼雁', '懷菱', '秋綠', '懷山', '幼楓', '念蘭', '雪蝶',
        '天絲', '憐蝶', '幼梅', '南真', '靈雲', '含凝', '水蓮', '雪菱', '思青',
        '盼雪', '訪陽', '千陽', '幻玉', '小卉', '慕凝', '代凝', '雅柏', '夢琴',
        '天彤', '碧凝', '幼春', '采翠', '易海', '初芹', '春松', '書卉', '訪芙',
        '靜筠', '若松', '綺亦', '雁南', '映露', '含柔', '惜天', '醉蓮', '向蓉',
        '寄亦', '書夏', '含云', '盼芹', '若柏', '笑薇', '寄旋', '詩南', '白秋',
        '雁楓', '冷雲', '妙菱', '凝琴', '曉嵐', '平春', '癡柏', '碧雁', '宛安',
        '綺蘭', '孤芙', '夢雪', '谷雙', '碧柏', '憐文', '憶露', '小荷', '映波',
        '憐亦', '若瑤', '南易', '飛亦', '樂天', '恨蝶', '翠靈', '千雪', '向凝',
        '覓菡', '南蓮', '元蝶', '盼風', '代文', '雪凡', '千翠', '傲容', '紫容',
        '飛珊', '海芙', '天柏', '秋丹', '雨白', '山青', '笑蕊', '問蘭', '幻藍',
        '安芹', '平香', '夜楓', '幻蕾', '惜文', '聽安', '依云', '采珊', '凡冬',
        '問夏', '宛萱', '宛晴', '含楓', '含柔', '半薇', '宛文', '水琴', '爾玉',
        '向珍', '恨之', '曉藍', '凌白', '從波', '冬寒', '春文', '小松', '代白',
        '恨柳', '平藍', '孤琴', '之寒', '從寒', '雅安', '癡陽', '書天', '谷春',
        '覓靈', '千雲', '冰蘭', '宛南', '芷雁', '傲嵐', '語卉', '若香', '笑真',
        '訪天', '紫凡', '天薇', '青易', '海荷', '千亦', '易寒', '幻柏', '元旋',
        '涵絲', '語綠', '憐海', '半寒', '春絲', '夜瑤', '冷琴', '靜蝶', '傲絲',
        '夢夏', '靜彤',
    );
}
