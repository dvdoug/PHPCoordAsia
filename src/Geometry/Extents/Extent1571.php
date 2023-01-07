<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Asia-ExFSU/Asia - Middle East - Kuwait and Saudi - 42°E to 48°E.
 * @internal
 */
class Extent1571
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [42.170192927242, 17.366159570323], [42.094090428182, 17.430053821847], [42.089478710736, 17.434175492853], [42.086149573637, 17.437341424161], [42.082046024734, 17.441478061329], [41.990096862904, 17.539735505294], [41.940069496938, 17.577188190785], [41.93602312628, 17.580383518901], [41.932146826863, 17.583783157131], [41.928450903146, 17.587378068138], [41.924945180091, 17.591158695485], [41.921638977045, 17.595114989038], [41.918541082965, 17.599236431691], [41.915659733057, 17.603512067314], [41.913002586882, 17.607930529883], [41.910576707995, 17.612480073694], [41.908388545166, 17.617148604587], [41.906443915241, 17.621923712097], [41.904747987676, 17.62679270244], [41.903305270796, 17.631742632265], [41.902119599808, 17.636760343055], [41.901194126611, 17.641832496112], [41.900531311411, 17.64694560801], [41.900132916186, 17.652086086442], [41.9, 17.657240266353], [41.9, 31.146143140343], [41.900139730263, 31.151427695966], [41.900558530563, 31.156697483342], [41.901255230516, 31.161937775495], [41.902227883123, 31.167133927877], [41.903473770202, 31.172271419295], [41.904989409991, 31.177335892486], [41.906770566876, 31.182313194247], [41.908812263226, 31.187189414986], [41.911108793305, 31.191950927589], [41.913653739219, 31.196584425509], [41.916439988848, 31.201076959947], [41.919459755725, 31.205415976044], [41.922704600792, 31.209589347962], [41.926165455989, 31.213585412774], [41.929832649591, 31.217393003056], [41.933695933241, 31.221001478097], [41.937744510585, 31.224400753632], [41.941967067448, 31.227581330029], [41.946351803449, 31.230534318833], [41.950886464984, 31.233251467604], [41.955558379462, 31.235725182985], [41.960354490726, 31.237948551918], [41.96526139554, 31.239915360964], [41.970265381041, 31.241620113668], [41.975352463065, 31.24305804592], [41.980508425225, 31.244225139266], [41.985718858643, 31.245118132142], [41.990969202213, 31.245734528984], [41.996244783299, 31.246072607206], [42.001530858733, 31.246131422014], [42.006812656021, 31.245910809044], [42.012075414625, 31.245411384821], [42.017304427211, 31.244634545039], [42.022485080754, 31.243582460658], [42.027602897372, 31.24225807184], [42.032643574788, 31.240665079728], [42.037593026297, 31.238807936106], [42.12259211077, 31.204324799425], [42.127888259837, 31.201995592644], [42.133040839966, 31.199363992905], [42.138032603205, 31.196438809333], [42.142846839926, 31.193229833802], [42.42274770866, 30.994729518454], [42.702648577394, 30.796229203105], [42.982550552026, 30.597728103464], [43.122847488061, 30.498229354684], [43.124243755732, 30.497220936238], [43.372703889602, 30.314500751912], [43.621164023473, 30.131780567586], [43.869624375895, 29.949060222534], [44.173384904459, 29.725670279094], [44.477145433023, 29.502280335653], [44.757996940622, 29.295738021896], [45.079773262468, 29.269944993575], [45.780018166032, 29.213814584334], [46.130140386159, 29.185749398283], [46.413417504155, 29.163043723088], [46.4834204866, 29.187801985552], [46.485865378935, 29.190515989823], [46.490003328222, 29.194604097742], [46.513475160497, 29.21648138656], [46.51767694841, 29.220183381344], [46.522079377686, 29.22364436437], [46.539306550538, 29.23642360021], [46.542752593464, 29.238868748689], [46.546298854235, 29.241166137964], [46.582691066149, 29.263665222436], [46.58831263865, 29.266893659063], [46.590617644067, 29.268119821522], [46.611126111235, 29.291611435767], [46.632125103853, 29.322407781084], [46.692598546521, 29.412231538937], [46.692711498434, 29.412398946051], [46.744927074606, 29.489619862799], [46.747269975765, 29.492937501598], [46.778390276058, 29.535158570934], [46.781773511641, 29.539493784892], [46.846909467451, 29.618385539042], [46.847960927568, 29.619638050268], [46.861552599538, 29.635562353935], [46.891767015332, 29.690676233253], [46.955915345598, 29.833727304614], [47.002014305915, 29.945272242518], [47.004551375853, 29.95091069994], [47.023720229612, 29.990217340565], [47.025578561214, 29.993838931874], [47.040852609066, 30.022170688465], [47.043586175513, 30.026924341847], [47.046576204298, 30.031521007363], [47.049813704521, 30.03594686302], [47.053288941147, 30.040188600446], [47.072179322007, 30.061997224713], [47.07569130599, 30.065844520498], [47.079398870126, 30.069503712285], [47.083291953673, 30.072964870595], [47.105516379942, 30.091710292958], [47.109737921532, 30.095080144956], [47.114135264088, 30.098217133054], [47.118695577346, 30.101112104362], [47.123405555535, 30.10375661213], [47.157711128045, 30.121817296334], [47.162693246934, 30.124266067951], [47.167803577496, 30.126434595701], [47.173026370717, 30.12831619662], [47.319834994985, 30.176646503627], [47.324519618229, 30.178062632528], [47.329267915798, 30.179247869298], [47.334068514989, 30.180199375162], [47.338909917831, 30.180914871159], [47.343780528624, 30.181392643595], [47.348668681713, 30.181631548152], [47.394223796459, 30.182741625056], [47.395954165804, 30.18276881128], [47.435955081332, 30.183051098878], [47.436275043975, 30.183052844955], [47.723075428496, 30.184159107162], [47.728206285863, 30.184047206111], [47.73332464539, 30.183672219556], [47.73841702623, 30.183035135144], [47.743470015958, 30.182137630841], [47.748470305899, 30.180982070515], [47.753404726181, 30.179571497705], [47.952348095417, 30.117135978361], [47.955774771986, 30.116795785383], [47.960594905784, 30.116078677082], [47.965374380531, 30.115127595964], [47.970101845962, 30.11394480065], [47.974766075321, 30.112533100034], [47.97935599203, 30.110895846615], [47.988633721112, 30.107329284219], [47.993467685385, 30.105324296783], [47.998190139611, 30.103069166785], [48.002788150315, 30.100570070394], [48.007249124842, 30.097833851929], [48.011560845838, 30.094868005124], [48.015711504712, 30.091680652598], [48.016845798534, 30.090711189794], [48.021822550066, 30.089512496978], [48.025852804762, 30.088314730661], [48.02713022069, 30.087990151562], [48.032081301373, 30.086454985145], [48.036946179804, 30.084665322131], [48.041711784088, 30.082625971335], [48.046365309075, 30.080342412479], [48.050894250774, 30.077820781471], [48.055286439948, 30.075067853916], [48.059530074812, 30.072091026915], [48.063613752747, 30.068898299182], [48.067526500937, 30.065498249555], [48.071257805851, 30.061900013948], [48.074797641499, 30.058113260794], [48.078136496363, 30.054148165076], [48.081265398963, 30.050015380981], [48.084175941957, 30.045726013273], [48.086860304735, 30.041291587455], [48.089311274432, 30.036724018802], [48.091522265307, 30.03203558034], [48.093487336442, 30.027238869875], [48.095201207703, 30.022346776135], [48.096659273931, 30.017372444147], [48.097857617309, 30.012329239907], [48.098793017897, 30.007230714473], [48.09946296228, 30.002090567551], [48.099865650321, 29.996922610682], [48.1, 29.991740730134], [48.1, 29.573740859839], [48.099864804964, 29.568542713093], [48.099459585408, 29.56335862162], [48.098785437007, 29.558202602688], [48.097844182591, 29.553088597661], [48.096638367218, 29.548030434301], [48.095171251294, 29.543041789379], [48.093446801754, 29.538136151696], [48.091469681339, 29.533326785609], [48.089245235985, 29.528626695168], [48.086779480373, 29.524048588949], [48.08407908166, 29.519604845697], [48.081151341458, 29.515307480854], [48.078004176084, 29.511168114066], [48.074646095161, 29.507197937772], [48.073176769941, 29.505633544039], [48.073721410563, 29.505070013141], [48.077196568228, 29.50107051336], [48.080455014133, 29.49689256535], [48.083487600936, 29.492547897748], [48.08628581534, 29.488048707216], [48.088841801996, 29.483407624207], [48.091148385556, 29.478637677502], [48.093199090812, 29.473752257638], [48.094988160876, 29.468765079318], [48.096510573343, 29.463690142907], [48.097762054386, 29.458541695133], [48.098739090759, 29.453334189087], [48.099438939653, 29.448082243655], [48.099859636404, 29.442800602477], [48.1, 29.437504092556], [48.1, 17.949596661617], [48.099860037945, 17.944307727729], [48.099440543567, 17.939033598843], [48.098742691132, 17.933789038516], [48.097768434097, 17.928588727537], [48.096520499642, 17.923447222831], [48.095002381038, 17.918378916709], [48.093218327864, 17.913397996582], [48.091173334114, 17.908518405245], [48.08887312422, 17.903753801853], [48.086324137024, 17.899117523678], [48.083533507755, 17.89462254878], [48.080509048057, 17.890281459679], [48.077259224123, 17.88610640813], [48.076350923145, 17.885001126216], [47.672646375077, 17.39374619423], [47.57077077312, 17.094911095157], [47.56895195654, 17.090000776499], [47.566878600346, 17.085192396609], [47.564556389539, 17.08049913974], [47.561991691465, 17.075933874483], [47.559191538352, 17.071509118488], [47.556163608031, 17.067237004135], [47.552916202881, 17.063129245273], [47.549458227068, 17.059197105099], [47.545799162127, 17.055451365275], [47.541949040966, 17.051902296366], [47.537918420358, 17.048559629678], [47.533718351991, 17.045432530578], [47.529360352167, 17.042529573359], [47.524856370229, 17.039858717734], [47.216012872427, 16.867480951519], [47.211432141774, 16.865077492868], [47.206733251266, 16.862914130947], [47.201928774997, 16.860996654848], [47.197031569605, 16.859330195682], [47.192054739867, 16.857919212845], [47.187011603634, 16.856767482085], [47.181915656191, 16.8558780854], [47.176780534144, 16.855253402789], [47.171619978928, 16.854895105885], [47.006424619639, 16.84771269896], [47.001316804115, 16.847621234029], [46.996210982733, 16.847790742933], [46.991120480738, 16.848220783283], [46.986058583398, 16.848910232755], [46.981038501325, 16.849857292013], [46.976073336003, 16.851059489409], [46.971176045591, 16.85251368743], [46.966359411111, 16.854216090888], [46.961636003083, 16.856162256828], [46.957018148728, 16.858347106116], [46.952517899788, 16.860764936701], [46.948147001079, 16.863409438493], [46.943916859836, 16.866273709835], [46.939838515942, 16.869350275508], [46.935922613118, 16.872631106247], [46.932179371146, 16.876107639692], [46.928618559192, 16.879770802735], [46.925249470314, 16.883611035201], [46.922080897211, 16.887618314795], [46.699250968208, 17.184724886799], [46.514654866109, 17.157377316118], [46.370319140014, 17.135994245585], [46.365640800558, 17.135413491746], [46.360940289133, 17.135053870496], [46.356228052222, 17.134916181063], [46.351514562362, 17.135000729448], [46.346810294877, 17.135307327751], [45.377185359917, 17.221496210858], [45.371744366035, 17.222130479876], [45.366346266665, 17.223061734306], [45.361007259729, 17.22428717976], [45.355743365832, 17.225803139078], [45.350570380187, 17.227605063366], [45.345503825224, 17.229687545641], [45.340558904008, 17.232044337059], [45.335750454622, 17.234668365664], [45.331092905641, 17.237551757608], [45.326600232837, 17.240685860781], [45.188443337224, 17.342801827104], [44.669404130138, 17.336472080676], [44.646688900621, 17.317001883947], [44.642701493213, 17.313758102268], [44.638552672062, 17.310723498426], [44.634253398991, 17.307906090311], [44.629815033341, 17.305313321948], [44.625249301956, 17.302952043831], [44.620568268201, 17.300828494819], [44.615784300086, 17.298948285654], [44.610910037591, 17.297316384139], [44.605958359267, 17.295937102009], [44.600942348208, 17.294814083538], [44.595875257488, 17.293950295915], [44.590770475139, 17.293348021399], [44.585641488781, 17.293008851291], [44.580501849984, 17.292933681732], [44.575365138464, 17.29312271133], [44.570244926203, 17.293575440641], [44.565154741589, 17.294290673485], [44.448582197557, 17.313737800371], [44.38085319416, 17.319361342119], [44.217460292917, 17.310726012266], [44.144461738186, 17.262977356857], [44.139947482279, 17.260192648609], [44.135291925588, 17.257651212341], [44.130508165638, 17.255360197901], [44.125609660634, 17.253326050626], [44.120610191591, 17.251554493203], [44.115523823568, 17.250050509573], [43.964965351889, 17.209841693045], [43.959997751851, 17.208650081752], [43.954975779929, 17.207713713431], [43.949912541959, 17.20703503172], [43.944821251465, 17.206615807775], [43.939715195182, 17.206457135644], [43.934607698378, 17.206559429413], [43.929512090083, 17.206922422127], [43.924441668298, 17.207545166483], [43.919409665297, 17.208426037307], [43.914429213092, 17.209562735791], [43.736233259723, 17.255051093335], [43.731470765505, 17.256393160579], [43.726780486053, 17.257969160051], [43.722173904343, 17.259775233309], [43.717662298436, 17.261806958636], [43.71325671387, 17.264059361862], [43.708967936614, 17.266526928541], [43.68660999594, 17.280137768385], [43.682892221408, 17.282515026352], [43.679282945901, 17.285053989374], [43.675789197834, 17.287749713277], [43.608703931721, 17.341914599752], [43.604811714581, 17.345224967443], [43.601093669257, 17.348729825141], [43.59755950278, 17.352420022403], [43.594218442113, 17.356285924903], [43.59107921006, 17.360317439585], [43.573440049903, 17.384205073862], [43.570372640775, 17.388600925111], [43.567545183269, 17.393154823551], [43.56652698173, 17.394897278497], [43.492105720523, 17.423144155727], [43.458056615489, 17.425388171953], [43.447671858289, 17.421944871082], [43.425732273232, 17.409706412274], [43.401207798203, 17.393397181662], [43.397011314144, 17.390754134255], [43.392688950562, 17.388322395964], [43.369523931477, 17.376035946439], [43.327548783881, 17.341684185766], [43.285083905344, 17.295689853262], [43.250383813041, 17.106144132169], [43.226424053198, 16.938276349075], [43.253237075704, 16.874110078411], [43.255007019445, 16.869566027011], [43.256553329872, 16.864941091547], [43.293361343788, 16.745218725214], [43.29482630831, 16.739943825282], [43.296000408739, 16.734596659815], [43.304331707567, 16.690987040674], [43.305172773843, 16.685867248716], [43.305747161346, 16.68071072458], [43.306053323843, 16.675531349454], [43.306090437157, 16.670343066041], [43.305858401378, 16.665159841025], [43.30535784114, 16.659995627473], [43.304590103933, 16.654864327272], [43.303557256481, 16.649779753709], [43.302262079173, 16.644755594286], [43.300708058584, 16.639805373869], [43.298899378083, 16.634942418284], [43.296840906579, 16.630179818444], [43.294538185407, 16.625530395106], [43.291997413414, 16.621006664362], [43.289225430273, 16.61662080394], [43.286229698069, 16.61238462043], [43.283018281211, 16.608309517495], [43.279599824725, 16.604406465173], [43.275983530981, 16.60068597035], [43.27217913492, 16.597158048472], [43.268196877846, 16.593832196586], [43.264047479862, 16.590717367772], [43.259742111006, 16.587821947045], [43.255292361187, 16.585153728779], [43.25071020898, 16.582719895728], [43.246007989384, 16.580526999688], [43.241198360615, 16.578580943861], [43.236294270033, 16.576886966964], [43.231308919282, 16.575449629124], [43.226255728759, 16.574272799609], [43.221148301482, 16.573359646401], [43.216000386473, 16.57271262768], [43.210825841744, 16.572333485197], [43.205638596996, 16.572223239591], [43.200452616116, 16.572382187641], [43.19528185959, 16.572809901462], [43.176027052136, 16.574906796706], [43.167617868753, 16.538125669878], [43.166414870425, 16.533397777736], [43.164982720116, 16.528734183137], [43.163324826367, 16.524145985516], [43.161445134994, 16.519644104861], [43.159348119693, 16.515239255725], [43.157038771397, 16.510941921721], [43.146761976963, 16.492888866912], [43.144166232138, 16.488584338108], [43.141357462882, 16.484415684286], [43.138342766073, 16.480393438324], [43.135129758904, 16.476527763175], [43.131726559635, 16.472828426186], [43.128141767081, 16.46930477442], [43.124384438887, 16.465965711038], [42.983137643233, 16.346659146707], [42.978656713556, 16.343089083936], [42.973978684823, 16.339781497787], [42.969118912232, 16.33674724511], [42.964093347537, 16.333996285557], [42.958918486694, 16.3315376489], [42.863844786743, 16.289661809667], [42.859115404829, 16.287721494193], [42.854293047039, 16.286025397859], [42.849390315099, 16.284577952884], [42.844420020769, 16.283382941711], [42.839395152361, 16.282443487132], [42.834328840799, 16.281762044115], [42.800473402567, 16.2780865833], [42.795307584945, 16.27766088843], [42.790126649046, 16.277503436741], [42.784944514432, 16.277614651256], [42.779775103886, 16.277994233177], [42.774632306006, 16.278641162684], [42.769529937888, 16.27955370168], [42.764481708009, 16.280729398456], [42.75950117939, 16.282165094281], [42.754601733162, 16.283856931887], [42.749796532613, 16.285800365833], [42.74509848782, 16.287990174717], [42.740520220967, 16.290420475204], [42.709371527243, 16.308004803494], [42.706473393392, 16.308863971195], [42.701539191323, 16.310612468912], [42.696703249771, 16.312616780172], [42.691978820953, 16.314871412442], [42.687378851504, 16.31737018722], [42.682915946993, 16.320106256964], [42.678602337381, 16.323072123859], [42.674449843511, 16.326259660365], [42.670469844707, 16.329660131486], [42.666673247597, 16.333264218709], [42.663070456221, 16.337062045539], [42.659671343524, 16.341043204565], [42.656485224295, 16.345196785982], [42.653520829647, 16.349511407482], [42.650786283086, 16.353975245453], [42.648289078252, 16.358576067373], [42.646036058385, 16.363301265337], [42.644033397569, 16.368137890605], [42.642286583814, 16.373072689084], [42.640800404017, 16.378092137653], [42.639578930846, 16.383182481218], [42.638625511577, 16.38832977041], [42.63794275892, 16.393519899804], [42.637532543863, 16.398738646582], [42.637395990543, 16.403971709501], [42.637396212312, 16.406469337699], [42.617582909063, 16.429651178206], [42.615415829376, 16.432275846837], [42.61339499539, 16.434810027846], [42.609341227312, 16.440263891974], [42.607511392169, 16.442908905534], [42.603814243956, 16.448664352471], [42.602176044598, 16.451417311071], [42.598857520151, 16.457458541206], [42.597417981706, 16.460307656873], [42.595587809876, 16.464128946921], [42.593921150789, 16.468024333171], [42.592316774601, 16.472005302963], [42.589990635806, 16.478395846804], [42.575647786543, 16.522400803967], [42.574198969615, 16.527260855041], [42.5732467962, 16.530778365258], [42.571535754054, 16.538213012125], [42.570944198465, 16.541321558267], [42.569871550495, 16.548286351153], [42.569500603891, 16.551426978386], [42.568920935962, 16.558453864404], [42.56877219774, 16.561613119434], [42.568688974371, 16.568657550553], [42.568763091869, 16.571821899638], [42.568936507116, 16.575814836785], [42.569269337756, 16.579797655343], [42.56967198192, 16.583679410014], [42.570437765329, 16.589430671521], [42.575962680666, 16.623367092218], [42.577007112717, 16.628822447465], [42.577773381059, 16.632299069034], [42.57874324521, 16.636304822286], [42.578999392742, 16.637274904063], [42.549839550529, 16.690089911012], [42.547182953493, 16.690705455446], [42.544472424757, 16.691373494598], [42.541512607875, 16.692146952291], [42.535840573999, 16.693809714646], [42.53263847916, 16.694852121926], [42.526760896021, 16.696970759918], [42.523642026629, 16.698206387772], [42.517862785633, 16.70070931498], [42.51484049453, 16.702132879374], [42.509182244438, 16.705021089206], [42.506269472392, 16.706626501111], [42.500756525984, 16.709899716373], [42.497965746296, 16.711680107722], [42.492624073329, 16.715336365221], [42.489967238412, 16.717284118207], [42.484516233124, 16.721578873689], [42.481735317555, 16.723930796796], [42.478431189539, 16.726852614782], [42.434545443506, 16.767419877821], [42.429720666728, 16.772193482921], [42.426622641767, 16.775474056893], [42.423805165977, 16.778585877649], [42.421120772117, 16.781813202833], [42.419106789675, 16.7843405943], [42.415056714468, 16.789793269681], [42.413226960053, 16.792439954579], [42.409526930931, 16.798204476073], [42.407889249222, 16.800959122482], [42.404568786281, 16.80701043358], [42.403130200273, 16.809861246345], [42.400217028736, 16.816170142539], [42.398983709497, 16.819104913763], [42.39650300641, 16.825638215028], [42.395480246473, 16.828644376351], [42.393453906697, 16.835365271499], [42.3926460972, 16.838429947939], [42.391092062756, 16.845298507447], [42.390502674445, 16.848408572574], [42.389434370441, 16.855382413943], [42.389065938607, 16.85852454613], [42.388491854196, 16.865559622699], [42.388345967625, 16.868720362242], [42.388239814364, 16.873133602763], [42.388328540327, 16.877547228043], [42.388514572662, 16.8819556364], [42.38908133881, 16.889172182534], [42.389507722148, 16.892877223548], [42.389224988525, 16.892836175667], [42.385833134087, 16.892448375449], [42.379789736595, 16.891942507683], [42.376381081595, 16.891761051125], [42.370312647011, 16.891622490028], [42.366901777194, 16.891648159429], [42.360823419675, 16.891878907327], [42.357424930978, 16.89211159864], [42.351352176539, 16.892714036752], [42.347980612756, 16.893152759921], [42.341929652304, 16.894129563297], [42.338599442966, 16.894772446393], [42.332587375181, 16.896126448487], [42.329312773899, 16.896970745609], [42.32335783091, 16.898704751598], [42.320152854459, 16.899746854507], [42.314274602148, 16.901863402988], [42.311152970538, 16.903098856441], [42.305372474303, 16.905599930041], [42.3023475521, 16.907023450741], [42.296687497126, 16.909910137877], [42.29377223627, 16.91151563698], [42.288256990364, 16.914787749319], [42.285463874728, 16.916568358386], [42.280119480941, 16.920224011685], [42.277460472869, 16.922172111985], [42.272314559379, 16.926207281625], [42.269801048429, 16.928314536652], [42.264882643991, 16.932722603649], [42.26252539811, 16.934979994729], [42.25786464428, 16.939751302209], [42.255673763611, 16.942149167031], [42.251301518735, 16.947270611645], [42.249286392266, 16.949798685568], [42.245233728449, 16.955253371389], [42.243402993684, 16.957900831341], [42.239700595441, 16.963667815367], [42.238062101266, 16.966423326143], [42.236111887371, 16.969855516428], [42.234298654537, 16.973362003427], [42.232551617219, 16.976910437666], [42.23013375431, 16.982204875163], [42.2122866874, 17.024500993873], [42.210106802158, 17.030136761895], [42.208775004827, 17.033915479663], [42.207502047968, 17.037775775202], [42.206387022185, 17.041684613689], [42.205579425114, 17.04475063662], [42.20413172866, 17.051072430448], [42.203621796238, 17.053686033757], [42.203093104932, 17.056629263913], [42.186081304161, 17.160211260379], [42.18591006986, 17.161290732507], [42.17528684533, 17.230709859105], [42.174806322335, 17.234278485414], [42.174438786704, 17.23743701568], [42.173885815797, 17.24415428928], [42.173747530204, 17.247007475785], [42.173643657311, 17.250213108125], [42.172554124829, 17.316826290919], [42.170192927242, 17.366159570323],
                ],
            ],
            [
                [
                    [41.979568544543, 16.50387059191], [41.975783241181, 16.504709412953], [41.970672832702, 16.506129941986], [41.965644933797, 16.507819441956], [41.960713690045, 16.509773159593], [41.955892975095, 16.511985598274], [41.951196351632, 16.514450533485], [41.94663703322, 16.517161030334], [41.942227847126, 16.520109463059], [41.937981198232, 16.523287536489], [41.933909034137, 16.526686309374], [41.930022811538, 16.530296219548], [41.926333464004, 16.534107110825], [41.922851371211, 16.538108261574], [41.919586329739, 16.542288414889], [41.916547525515, 16.546635810251], [41.913743507964, 16.551138216622], [41.911182165959, 16.55578296685], [41.908870705626, 16.560556993314], [41.906815630067, 16.565446864682], [41.905022721069, 16.570438823703], [41.903497022834, 16.575518825912], [41.902242827789, 16.580672579141], [41.901263664507, 16.585885583727], [41.900562287785, 16.591143173311], [41.900140670888, 16.596430556099], [41.9, 16.601732856472], [41.9, 16.943864198044], [41.900136152168, 16.949080700333], [41.900544237923, 16.95428299786], [41.901223146029, 16.959456924543], [41.902171027792, 16.964588391556], [41.903385302087, 16.969663425691], [41.904862662393, 16.974668207412], [41.906599085794, 16.979589108479], [41.908589843934, 16.984412729066], [41.910829515892, 16.989125934245], [41.913312002944, 16.993715889755], [41.91603054517, 16.998170096946], [41.918977739862, 17.002476426821], [41.922145561681, 17.006623153055], [41.925525384511, 17.010598983934], [41.929108004948, 17.014393093098], [41.932883667361, 17.017995149023], [41.936842090457, 17.021395343155], [41.940972495279, 17.024584416617], [41.945263634556, 17.027553685424], [41.949703823328, 17.030295064129], [41.954280970771, 17.032801087839], [41.958982613112, 17.035064932541], [41.963795947575, 17.03708043369], [41.968707867243, 17.038842102988], [41.973704996746, 17.040345143333], [41.978773728682, 17.041585461881], [41.983900260675, 17.042559681191], [41.989070632956, 17.043265148422], [41.994270766378, 17.043699942555], [41.999486500751, 17.043862879628], [42.004703633405, 17.043753515955], [42.009907957861, 17.04337214934], [42.015085302519, 17.042719818258], [42.020221569243, 17.041798299037], [42.025302771758, 17.040610101014], [42.030315073728, 17.039158459702], [42.035244826439, 17.037447327984], [42.040078605959, 17.035481365346], [42.044803249697, 17.03326592519], [42.049405892244, 17.030807040254], [42.053874000405, 17.02811140619], [42.058195407326, 17.025186363326], [42.062358345631, 17.02203987668], [42.066351479457, 17.018680514272], [42.070163935328, 17.015117423791], [42.073785331761, 17.011360307687], [42.077205807536, 17.007419396751], [42.080416048551, 17.003305422253], [42.083407313179, 16.999029586725], [42.086171456077, 16.994603533451], [42.088700950365, 16.990039314768], [42.090988908119, 16.985349359239], [42.093029099131, 16.980546437819], [42.094815967873, 16.975643629069], [42.096344648624, 16.97065428355], [42.09761097872, 16.965591987468], [42.099535632022, 16.956945581299], [42.10407590597, 16.956218382544], [42.107405319136, 16.955579750954], [42.113426600783, 16.95423093211], [42.116700817198, 16.953390603041], [42.122664090307, 16.951661120501], [42.125869083707, 16.950622699484], [42.131754701602, 16.948510232207], [42.134876743515, 16.947278173072], [42.140663592863, 16.944780969613], [42.143689311471, 16.943360555285], [42.149354694994, 16.940477768444], [42.152271132438, 16.938875088209], [42.157790709459, 16.935607152885], [42.160585377351, 16.933829076191], [42.165933174543, 16.930178122454], [42.168594107438, 16.928232269384], [42.173742611614, 16.924202559412], [42.176258418215, 16.922097267953], [42.181178762735, 16.917695640709], [42.183538674621, 16.915439930948], [42.188200927238, 16.910676234897], [42.190394844894, 16.908279770313], [42.195209769358, 16.902610680342], [42.197573142527, 16.89960854776], [42.200661359203, 16.895470135272], [42.268352981875, 16.799695928645], [42.271877466917, 16.794354503845], [42.274092414186, 16.790752017748], [42.276179607399, 16.787194940735], [42.278118355131, 16.78355482678], [42.279562157151, 16.780703816737], [42.282480232167, 16.774408833159], [42.283719085993, 16.771473515999], [42.285200297803, 16.767758255971], [42.286531757427, 16.763986736281], [42.287772640032, 16.760234361906], [42.289452112544, 16.754606378585], [42.30634573506, 16.69126249498], [42.3248576796, 16.621598153235], [42.326212939887, 16.615809997765], [42.327001131013, 16.611927162474], [42.327805528795, 16.607442800559], [42.328404840084, 16.602926454297], [42.328833035412, 16.599018897087], [42.329303036051, 16.593125387822], [42.330275790919, 16.573692355767], [42.330395421885, 16.567651980655], [42.330353929668, 16.563666229774], [42.330229461753, 16.559612058677], [42.329940689568, 16.555566269981], [42.32965061102, 16.552406148246], [42.328768305779, 16.545469124521], [42.328257046434, 16.542330612877], [42.326899621179, 16.535504171885], [42.326169378168, 16.532400703232], [42.324352350359, 16.525723774317], [42.323406257384, 16.522668631226], [42.321148775908, 16.516177131193], [42.319990889705, 16.513183389149], [42.317315085094, 16.506909808942], [42.315950367976, 16.503990280471], [42.312880665129, 16.497963430091], [42.31131496366, 16.495130610023], [42.307877395351, 16.48937551756], [42.306117415272, 16.486641529637], [42.30233896986, 16.48117948103], [42.30039224735, 16.478556026115], [42.296300277279, 16.473404725489], [42.294175146692, 16.470903031565], [42.289796856519, 16.466076857779], [42.287502414728, 16.463707631977], [42.282864440027, 16.459217965943], [42.280410507523, 16.456991348785], [42.275538589013, 16.452846946554], [42.272935667935, 16.450772468615], [42.267854419391, 16.446979857457], [42.265113648654, 16.44506639862], [42.259846413356, 16.441630276876], [42.256979521078, 16.439886028366], [42.251545105371, 16.436807968782], [42.24856083375, 16.435238682178], [42.245783161537, 16.433832788059], [42.23793576159, 16.430013160539], [42.235140863275, 16.428705721272], [42.232066201847, 16.427324818892], [42.226374275586, 16.424976252091], [42.223204640401, 16.423781234991], [42.217400522501, 16.421794077422], [42.214156525793, 16.420793496603], [42.208264063994, 16.41917146367], [42.204959585496, 16.418369605751], [42.198995271659, 16.417113463024], [42.195644450273, 16.416513764637], [42.18962418747, 16.41562442943], [42.186241360682, 16.415229462349], [42.180180691821, 16.414708114122], [42.1767803345, 16.414519574187], [42.170694682915, 16.414367718171], [42.167291345515, 16.414386417946], [42.16119626191, 16.414605901523], [42.157804508343, 16.41483176673], [42.151715918667, 16.415424748061], [42.148350264097, 16.415856817801], [42.14202263439, 16.416876210311], [42.138431667007, 16.417573458702], [42.134712220266, 16.418369343163], [42.097642406191, 16.427041943739], [42.095125304809, 16.427665357695], [42.092386326595, 16.428381540164], [42.086903335075, 16.429983860033], [42.083701402051, 16.431019714849], [42.077639981752, 16.43319866866], [42.074347533468, 16.434503439661], [42.070966781804, 16.435915398185], [42.058158531351, 16.441542446365], [42.055604220158, 16.442707678878], [42.052926253057, 16.443975033884], [42.047583062016, 16.446702799599], [42.044667931507, 16.448303007265], [42.038873741763, 16.451742593027], [42.035826513876, 16.453693266814], [42.032425944152, 16.455969543622], [42.023845059374, 16.461971246904], [42.02168614806, 16.463524406062], [42.019531929207, 16.465118085665], [42.014873613842, 16.468782773144], [42.012357346521, 16.47088597405], [42.007279897319, 16.475432629029], [42.004776876779, 16.477832611966], [42.001991955765, 16.480610052123], [41.979568544543, 16.50387059191],
                ],
            ],
        ];
    }
}
