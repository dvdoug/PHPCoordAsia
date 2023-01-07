<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Asia-ExFSU/Japan - 33°20'N to 34°N; 131°E to 132°E.
 * @internal
 */
class Extent2510
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [131, 34.099366666667], [131.7256196039, 34.099366666667], [131.73083451685, 34.099230597508], [131.73603523802, 34.098822760326], [131.74070991283, 34.098209551842], [131.74525410409, 34.098811732146], [131.75050699442, 34.099227836668], [131.75577451054, 34.099366666667], [132, 34.099366666667], [132.00523359562, 34.099229620142], [132.01045284633, 34.098818856204], [132.0156434465, 34.098135500727], [132.02079116908, 34.09718142674], [132.02588190451, 34.095959249296], [132.03090169944, 34.094472318297], [132.03583679495, 34.092724709317], [132.04067366431, 34.090721212431], [132.04539904997, 34.088467319086], [132.05, 34.085969207045], [132.0544639035, 34.083233723462], [132.05877852523, 34.080268366105], [132.0629320391, 34.077081262813], [132.06691306064, 34.073681149215], [132.07071067812, 34.070077344786], [132.07431448255, 34.066279727303], [132.07771459615, 34.062298705772], [132.08090169944, 34.058145191896], [132.08386705679, 34.053830570169], [132.08660254038, 34.049366666667], [132.08910065242, 34.044765716641], [132.09135454576, 34.040040330975], [132.09335804265, 34.035203461622], [132.09510565163, 34.030268366105], [132.09659258263, 34.025248571177], [132.09781476007, 34.020157835749], [132.09876883406, 34.015010113171], [132.09945218954, 34.009819512994], [132.09986295348, 34.004600262291], [132.1, 33.999366666667], [132.1, 33.840494559128], [132.09986399287, 33.835280834103], [132.09945634143, 33.830081291153], [132.0990018486, 33.826615754934], [132.09944869949, 33.823232480083], [132.09986207976, 33.817996721874], [132.1, 33.812746481376], [132.1, 33.732875109163], [132.09986203917, 33.727624096551], [132.09944853733, 33.722387572621], [132.09876063543, 33.717179986076], [132.09780023155, 33.712015705777], [132.09656997563, 33.706908981091], [132.09507326223, 33.701873902578], [132.09331422109, 33.696924363111], [132.09129770581, 33.692074019541], [132.08902928037, 33.687336255018], [132.08651520386, 33.682724142061], [132.08376241316, 33.678250406487], [132.08077850381, 33.673927392303], [132.07757170906, 33.669767027642], [132.07415087717, 33.665780791851], [132.07052544693, 33.661979683819], [132.06670542171, 33.658374191625], [132.06270134178, 33.654974263605], [132.05852425526, 33.651789280896], [132.05418568765, 33.648828031555], [132.04969760997, 33.646098686312], [132.04507240583, 33.64360877602], [132.04032283715, 33.641365170883], [132.03546200903, 33.639374061492], [132.03050333354, 33.63764094175], [132.02546049275, 33.636170593709], [132.02034740094, 33.634967074379], [132.01517816624, 33.634033704531], [132.00996705169, 33.633373059533], [132.00472843589, 33.632986962248], [131.99947677331, 33.632876478003], [131.99422655442, 33.633041911647], [131.98899226572, 33.633482806714], [131.98378834975, 33.634197946678], [131.97862916523, 33.635185358313], [131.97352894747, 33.636442317136], [131.96850176908, 33.637965354926], [131.96356150114, 33.639750269292], [131.95872177491, 33.641792135268], [131.95399594425, 33.644085318902], [131.94939704874, 33.646623492806], [131.94493777774, 33.649399653607], [131.94422800265, 33.649867836661], [131.93917462253, 33.653430124648], [131.93625857271, 33.655623756778], [131.93132517467, 33.659585442828], [131.92858609156, 33.661931343321], [131.92380330635, 33.666304045055], [131.92125292337, 33.668792181876], [131.91665641949, 33.673584513028], [131.91430566595, 33.676204244553], [131.90993607699, 33.681420454035], [131.9077950312, 33.684160574396], [131.90369755901, 33.689799061934], [131.90177540489, 33.692647848801], [131.89799901985, 33.698699642206], [131.89630400737, 33.701644906785], [131.89290018671, 33.708092225813], [131.89143959619, 33.711121364871], [131.88846057955, 33.717936433885], [131.88724069016, 33.721036483563], [131.88473729088, 33.72818077882], [131.88376335329, 33.731338470024], [131.88178243814, 33.738762585341], [131.88105865161, 33.74196440046], [131.87964048074, 33.749608678523], [131.87916997463, 33.752840909245], [131.87834565844, 33.760636910065], [131.87813047829, 33.763885716034], [131.8779476258, 33.767820026932], [131.87791984019, 33.771758486686], [131.87796093845, 33.775009954763], [131.87808842102, 33.778949490996], [131.8783710551, 33.782880943084], [131.87866828652, 33.78612114694], [131.87910405146, 33.790026387899], [131.87969290595, 33.793911493873], [131.88024502765, 33.797126553683], [131.88186495057, 33.804760430256], [131.88246363248, 33.807123490593], [131.7634577172, 33.864479484969], [131.76167273753, 33.865361777462], [131.759266994, 33.866580856772], [131.75479387989, 33.868992299879], [131.75154967403, 33.870849141931], [131.74640013965, 33.874006720544], [131.74330734647, 33.876034169569], [131.73824912181, 33.879578089798], [131.73532098109, 33.881767477792], [131.73037971704, 33.885711643403], [131.72762876755, 33.888053608876], [131.72283506153, 33.892410159186], [131.72027308735, 33.894894687019], [131.7184956628, 33.896736760834], [131.64082977267, 33.883585242821], [131.4499503411, 33.834772231417], [131.40361772073, 33.816036634737], [131.3973888889, 33.81308248134], [131.3956552199, 33.81228044491], [131.39343353684, 33.811278290118], [131.39154133951, 33.810448178253], [131.32536116707, 33.782226453506], [131.32290510375, 33.781217418813], [131.31963789106, 33.779925563412], [131.31443272382, 33.778032385791], [131.31080381506, 33.776825211896], [131.30538084055, 33.775190284134], [131.30166248821, 33.774183217881], [131.2962293276, 33.772873517848], [131.29243742748, 33.77207086559], [131.28700003881, 33.771076063034], [131.28315079983, 33.770481257459], [131.27771340559, 33.769793018649], [131.27382328083, 33.76940860416], [131.26838882228, 33.769020723488], [131.26447443906, 33.768848345347], [131.25904500471, 33.768756827279], [131.25512309392, 33.768797224581], [131.24970032865, 33.769000327285], [131.24578765361, 33.769253329775], [131.2400137626, 33.769795191075], [131.23566341838, 33.770331112984], [131.23206441143, 33.770841040931], [131.16027350067, 33.782347422155], [131.16149247574, 33.780401310671], [131.17368297634, 33.76426015014], [131.17904980474, 33.757982291802], [131.20539542287, 33.756474641285], [131.21046296437, 33.756055155656], [131.21556005687, 33.755502427906], [131.22203676106, 33.754584893239], [131.2258715109, 33.753913031563], [131.23128230101, 33.752810255913], [131.23505828253, 33.751931429023], [131.24045108925, 33.750516727506], [131.24415210836, 33.74943470776], [131.24952123132, 33.747699143369], [131.25313141754, 33.746418574501], [131.25846908361, 33.744351432089], [131.26197295842, 33.742877809148], [131.26726883746, 33.740466865884], [131.27065138091, 33.738806511502], [131.27571425084, 33.736138946945], [131.27874388992, 33.734430171946], [131.28117108531, 33.733015886053], [131.29129714082, 33.726923493549], [131.3149903236, 33.716582994512], [131.3514133448, 33.713029934035], [131.37020738422, 33.741064806522], [131.37192840537, 33.743549982531], [131.37358505727, 33.745866598703], [131.37750122846, 33.750985778008], [131.37969125204, 33.753665015436], [131.38422642236, 33.758839255245], [131.386624026, 33.761391931465], [131.39138412965, 33.766130441939], [131.39397905075, 33.768545612234], [131.39892147829, 33.772852141919], [131.40170260527, 33.775119450408], [131.4067897875, 33.779002545883], [131.40974520738, 33.781112270105], [131.41494476707, 33.784583848887], [131.41806181654, 33.786526941659], [131.42334644743, 33.789601027062], [131.4266117672, 33.791369155451], [131.43195892066, 33.794060801823], [131.43535851289, 33.795646383033], [131.4403977002, 33.7978302662], [131.44345222299, 33.799055538425], [131.44582194748, 33.799971343893], [131.46772015421, 33.808115967419], [131.47096023688, 33.809258092373], [131.47481727231, 33.810543643391], [131.48044468445, 33.812237242341], [131.48415830113, 33.813236864057], [131.48918210834, 33.814450843437], [131.49237272074, 33.815135086272], [131.49470492015, 33.815606288616], [131.55434730881, 33.826919770467], [131.55772522256, 33.827500735695], [131.56186787395, 33.828140336859], [131.56754950616, 33.828851670574], [131.57143422471, 33.829225427669], [131.57688398902, 33.829599871506], [131.5807922367, 33.829761311278], [131.58623652978, 33.829837843848], [131.59015153992, 33.829786276067], [131.59558862221, 33.829566596378], [131.59949359939, 33.829302244731], [131.60492176381, 33.828785780515], [131.60879995637, 33.828309781605], [131.61421712607, 33.82749370822], [131.61805189834, 33.826808106616], [131.62406514541, 33.825541210493], [131.62856440462, 33.824447895933], [131.63278865683, 33.823323079637], [131.69174646725, 33.806235603972], [131.69670444011, 33.804657730968], [131.70143439763, 33.803015733201], [131.7077732135, 33.800570923301], [131.71127107239, 33.79908344885], [131.71655938029, 33.796650469508], [131.71993475838, 33.794976862959], [131.72523489271, 33.792147456051], [131.72855329312, 33.790245729587], [131.7313501309, 33.788581869987], [131.75756080342, 33.772405789558], [131.76001248716, 33.770843052196], [131.7629390524, 33.768917224263], [131.767875223, 33.765451229837], [131.77079760823, 33.763264747585], [131.77574324335, 33.759314312173], [131.7784890552, 33.756974920271], [131.78308271999, 33.752808552199], [131.78542921191, 33.750543808362], [131.78757834653, 33.7484056825], [131.81044001423, 33.724960958403], [131.81395366629, 33.721166143023], [131.81714508757, 33.717535357371], [131.82140305886, 33.712350266134], [131.86036418272, 33.661520461192], [131.86342020442, 33.657311098402], [131.86569180584, 33.65400460136], [131.86985149274, 33.647413460781], [131.87155196084, 33.644470863647], [131.87496304659, 33.638038341993], [131.87642961747, 33.635011356921], [131.87815003602, 33.631265595663], [131.87971462698, 33.627452116606], [131.88114016828, 33.623762798759], [131.88308778221, 33.618247795178], [131.89388257166, 33.584575063308], [131.89580410109, 33.577759947841], [131.89682647482, 33.573571380377], [131.89781801521, 33.569059075397], [131.89860008629, 33.564505789393], [131.89907864996, 33.561273694802], [131.89992034704, 33.553504272228], [131.9001443379, 33.550255120253], [131.90037642524, 33.54240879882], [131.90034491488, 33.53915650166], [131.90021663251, 33.534969991308], [131.89991315018, 33.530792525118], [131.89957305745, 33.527164369429], [131.89894357005, 33.521935131922], [131.88763125016, 33.445079541181], [131.88723468245, 33.442601514334], [131.88685269722, 33.440392609892], [131.88535774546, 33.43329253027], [131.88456702552, 33.430113863184], [131.88242381278, 33.422724356868], [131.88138499296, 33.419597671061], [131.87912886431, 33.413580746001], [131.87926809053, 33.413829876634], [131.88102424956, 33.416718193573], [131.88497648446, 33.422721201781], [131.88695659761, 33.425505497719], [131.89123041451, 33.431088541261], [131.89342601419, 33.433756880312], [131.89797139337, 33.438909434844], [131.90037308545, 33.441450377243], [131.90514348824, 33.446169612612], [131.90774099214, 33.448572263934], [131.91269428247, 33.452861563169], [131.91547647512, 33.455115621216], [131.92147988405, 33.459617103305], [131.92531702655, 33.462275374905], [131.93005766476, 33.465364809414], [131.9477937452, 33.476221023692], [131.95238548404, 33.478866973099], [131.95711094878, 33.481265951369], [131.96195686792, 33.483411220944], [131.96690963162, 33.485296756809], [131.97195533, 33.486917263416], [131.97707979215, 33.488268189554], [131.98226862597, 33.489345741132], [131.98750725855, 33.490146891832], [131.99278097714, 33.490669391615], [131.99807497044, 33.490911773035], [132.0033743702, 33.490873355359], [132.00866429301, 33.490554246484], [132.01392988206, 33.489955342632], [132.01915634887, 33.489078325831], [132.02432901485, 33.487925659191], [132.02943335252, 33.486500579992], [132.03445502629, 33.484807090583], [132.03937993272, 33.48284994715], [132.04419424017, 33.480634646351], [132.04888442758, 33.478167409884], [132.05343732253, 33.475455167011], [132.05784013815, 33.472505535097], [132.06208050908, 33.469326798217], [132.06614652619, 33.465927883889], [132.07002677004, 33.462318338003], [132.0737103429, 33.45850829801], [132.07718689943, 33.45450846445], [132.08044667567, 33.450330070901], [132.08348051651, 33.44598485243], [132.08627990136, 33.441485012631], [132.08883696813, 33.436843189356], [132.09114453527, 33.432072419219], [132.09319612194, 33.427186100981], [132.09498596624, 33.422197957923], [132.09650904138, 33.417121999302], [132.09776106977, 33.411972481005], [132.09873853509, 33.406763865513], [132.09943869211, 33.401510781282], [132.09985957443, 33.396227981659], [132.1, 33.390930303446], [132.1, 33.332666666667], [132.09986295348, 33.327433071043], [132.09945218954, 33.32221382034], [132.09876883406, 33.317023220163], [132.09781476007, 33.311875497585], [132.09659258263, 33.306784762157], [132.09510565163, 33.30176496723], [132.09335804265, 33.296829871712], [132.09135454576, 33.291993002359], [132.08910065242, 33.287267616693], [132.08660254038, 33.282666666667], [132.08386705679, 33.278202763166], [132.08090169944, 33.273888141438], [132.07771459615, 33.269734627562], [132.07431448255, 33.265753606031], [132.07071067812, 33.261955988548], [132.06691306064, 33.258352184119], [132.0629320391, 33.254952070521], [132.05877852523, 33.25176496723], [132.0544639035, 33.248799609872], [132.05, 33.246064126289], [132.04539904997, 33.243566014248], [132.04067366431, 33.241312120903], [132.03583679495, 33.239308624017], [132.03090169944, 33.237561015037], [132.02588190451, 33.236074084038], [132.02079116908, 33.234851906594], [132.0156434465, 33.233897832608], [132.01045284633, 33.23321447713], [132.00523359562, 33.232803713192], [132, 33.232666666667], [131.96003969472, 33.232666666667], [131.95485705975, 33.232801055495], [131.94968835454, 33.233203860772], [131.94454747142, 33.233873999848], [131.93944822794, 33.234809671538], [131.93440432972, 33.236008360966], [131.92942933363, 33.237466846322], [131.92453661135, 33.239181207525], [131.91973931343, 33.241146836753], [131.91505033393, 33.243358450835], [131.91048227577, 33.245810105446], [131.90604741689, 33.248495211087], [131.90175767719, 33.251406550794], [131.89762458652, 33.254536299535], [131.89365925372, 33.257876045246], [131.88987233672, 33.261416811436], [131.88627401389, 33.265149081317], [131.88287395674, 33.269062823381], [131.87968130384, 33.273147518365], [131.87670463634, 33.277392187521], [131.87395195487, 33.281785422126], [131.871430658, 33.286315414147], [131.86914752242, 33.290969987979], [131.86710868469, 33.295736633166], [131.86531962476, 33.300602538032], [131.8637851512, 33.305554624111], [131.86250938836, 33.310579581303], [131.86235520308, 33.311260419762], [131.8609400745, 33.318862999494], [131.8604669132, 33.32209522237], [131.85963918983, 33.329847946796], [131.85941997936, 33.333096911703], [131.85919916679, 33.340926776037], [131.85923487634, 33.34417856918], [131.85962823885, 33.352009025177], [131.85991874571, 33.355249718875], [131.8609207215, 33.363003794965], [131.86146481111, 33.366219507349], [131.86305733203, 33.373822984803], [131.86385270266, 33.376999939333], [131.86600637835, 33.384384264822], [131.86704965044, 33.387508849394], [131.86906721875, 33.392865380626], [131.84237442349, 33.344853752421], [131.84054414539, 33.341698585585], [131.83878910156, 33.338796387187], [131.8348470625, 33.332777852225], [131.83287353156, 33.329989056121], [131.82861601544, 33.324400037735], [131.82642696958, 33.321726694354], [131.82189748809, 33.31656713729], [131.81950230905, 33.314020680812], [131.81474721879, 33.309293360271], [131.81215616707, 33.306884681325], [131.80721743227, 33.302586211342], [131.80444160317, 33.300325610604], [131.79831964948, 33.295718507246], [131.79437527436, 33.292980364973], [131.78952860857, 33.289819645716], [131.72010951335, 33.247359125437], [131.71535035075, 33.244624736847], [131.71044832943, 33.242155587862], [131.70541821749, 33.239959117165], [131.7002751689, 33.238041941958], [131.69503467785, 33.236409838018], [131.68971253213, 33.235067722307], [131.6843247655, 33.234019638149], [131.67888760942, 33.233268743057], [131.67341744415, 33.232817299215], [131.66793074938, 33.232666666667], [131, 33.232666666667], [130.99476640438, 33.232803713192], [130.98954715367, 33.23321447713], [130.9843565535, 33.233897832608], [130.97920883092, 33.234851906594], [130.97411809549, 33.236074084038], [130.96909830056, 33.237561015037], [130.96416320505, 33.239308624017], [130.95932633569, 33.241312120903], [130.95460095003, 33.243566014248], [130.95, 33.246064126289], [130.9455360965, 33.248799609872], [130.94122147477, 33.25176496723], [130.9370679609, 33.254952070521], [130.93308693936, 33.258352184119], [130.92928932188, 33.261955988548], [130.92568551745, 33.265753606031], [130.92228540385, 33.269734627562], [130.91909830056, 33.273888141438], [130.91613294321, 33.278202763166], [130.91339745962, 33.282666666667], [130.91089934758, 33.287267616693], [130.90864545424, 33.291993002359], [130.90664195735, 33.296829871712], [130.90489434837, 33.30176496723], [130.90340741737, 33.306784762157], [130.90218523993, 33.311875497585], [130.90123116594, 33.317023220163], [130.90054781046, 33.32221382034], [130.90013704652, 33.327433071043], [130.9, 33.332666666667], [130.9, 33.999366666667], [130.90013704652, 34.004600262291], [130.90054781046, 34.009819512994], [130.90123116594, 34.015010113171], [130.90218523993, 34.020157835749], [130.90340741737, 34.025248571177], [130.90489434837, 34.030268366105], [130.90664195735, 34.035203461622], [130.90864545424, 34.040040330975], [130.91089934758, 34.044765716641], [130.91339745962, 34.049366666667], [130.91613294321, 34.053830570169], [130.91909830056, 34.058145191896], [130.92228540385, 34.062298705772], [130.92568551745, 34.066279727303], [130.92928932188, 34.070077344786], [130.93308693936, 34.073681149215], [130.9370679609, 34.077081262813], [130.94122147477, 34.080268366105], [130.9455360965, 34.083233723462], [130.95, 34.085969207045], [130.95460095003, 34.088467319086], [130.95932633569, 34.090721212431], [130.96416320505, 34.092724709317], [130.96909830056, 34.094472318297], [130.97411809549, 34.095959249296], [130.97920883092, 34.09718142674], [130.9843565535, 34.098135500727], [130.98954715367, 34.098818856204], [130.99476640438, 34.099229620142], [131, 34.099366666667],
                ],
            ],
        ];
    }
}
