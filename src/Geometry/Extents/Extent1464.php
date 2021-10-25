<?php
/**
 * PHPCoord.
 *
 * @author Doug Wright
 */
declare(strict_types=1);

namespace PHPCoord\Geometry\Extents;

/**
 * Asia-ExFSU/Iran - west of 48°E.
 * @internal
 */
class Extent1464
{
    public function __invoke(): array
    {
        return
        [
            [
                [
                    [48.1, 39.807053643924], [48.084710693359, 39.81558380127], [47.91290435791, 39.779161071778], [47.893884277344, 39.76679763794], [47.86985168457, 39.733735656739], [47.642495727539, 39.615266418457], [47.560678100586, 39.598191833496], [47.491662597656, 39.570542907716], [47.437215423584, 39.524297332764], [47.418607330322, 39.497487640381], [47.386937713623, 39.474435424805], [47.299504852295, 39.439988708496], [47.264573669434, 39.435273742676], [47.199708557129, 39.404435729981], [47.143464660645, 39.337903594971], [47.133878326416, 39.296723937989], [47.052896118164, 39.256372070313], [47.008737182617, 39.267907714844], [46.974702453614, 39.267495727539], [46.948880767822, 39.260614013672], [46.858949279785, 39.185964202881], [46.845471954346, 39.15103302002], [46.752206420899, 39.076928710938], [46.472494506836, 39.015824890137], [46.440374755859, 38.975587463379], [46.416387939453, 38.978036499024], [46.351934814453, 38.989991760254], [46.27638092041, 39.006936645508], [46.251093292237, 39.009980773926], [46.194715881348, 38.995820617676], [46.168604278564, 38.982347106934], [46.144995117188, 38.966794586182], [46.095533752441, 38.944146728516], [46.078245544434, 38.941148376465], [45.974714660644, 38.971932983399], [45.850828552246, 38.987214660645], [45.741102600098, 39.003602600098], [45.507490539551, 39.051377868652], [45.438604736328, 39.065545654297], [45.418592834473, 39.070542907715], [45.377264404297, 39.084962463379], [45.333475494385, 39.103185272217], [45.324434661865, 39.122766113282], [45.321096801758, 39.160821533203], [45.245542907715, 39.264707183838], [45.198389434815, 39.297624206543], [45.171240234375, 39.287202453614], [45.125814819336, 39.294984436036], [45.043531799317, 39.316857910157], [45.041796112061, 39.347074127197], [45.030546569824, 39.385552978516], [45.015821838379, 39.412202453614], [44.963041687012, 39.473046875], [44.902216339112, 39.516690826416], [44.874708557129, 39.520539855957], [44.854574584961, 39.532350158692], [44.827772521973, 39.576646423341], [44.808042907715, 39.635827636719], [44.8030418396, 39.655545806885], [44.788595581055, 39.705819702149], [44.768465423584, 39.722348785401], [44.713539191731, 39.730737615223], [44.713041687012, 39.730813598633], [44.636717224121, 39.801801300049], [44.508463287354, 39.879155731202], [44.371084594727, 39.798867797852], [44.377890014649, 39.740655517578], [44.32582321167, 39.536443328858], [44.301100158692, 39.516515350342], [44.240270996094, 39.495545959473], [44.204523468018, 39.48729095459], [44.130918884278, 39.50845489502], [44.100958251953, 39.516938781739], [43.976862335205, 39.511655426026], [43.936380767822, 39.485475158692], [43.934954071045, 39.477445220947], [43.960546875, 39.452485656739], [43.974714660645, 39.436097717285], [44.116449737549, 39.236516571045], [44.098032379151, 39.156674957276], [44.062414550781, 39.105199432374], [44.073324584961, 39.068040466309], [44.10943069458, 38.993463134766], [44.150549316406, 38.965547180176], [44.18366470337, 38.962491607666], [44.200266265869, 38.942628479004], [44.203188323975, 38.909986114502], [44.161795043945, 38.824292755127], [44.20651473999, 38.747281646729], [44.217214965821, 38.71304473877], [44.221525573731, 38.609368896485], [44.211767578125, 38.569924926758], [44.204161071778, 38.549436187744], [44.20525970459, 38.500535583496], [44.218145751953, 38.482053375244], [44.336725616455, 38.494809722901], [44.382517242432, 38.441300964356], [44.373220825196, 38.416749572754], [44.299017333985, 38.31129989624], [44.223318481445, 38.197213745118], [44.138883972168, 38.060273742676], [44.12396850586, 37.999150848389], [44.19305267334, 37.973321533204], [44.476793670654, 37.866796112061], [44.517767333985, 37.817975616456], [44.498876953125, 37.790818786622], [44.484434509277, 37.713883972168], [44.488851928711, 37.543092346192], [44.512800598145, 37.534223175049], [44.548597717285, 37.527772521973], [44.701658630371, 37.421662902832], [44.718180084229, 37.397416687012], [44.720545196533, 37.368745422364], [44.692762756348, 37.274987792969], [44.687338256836, 37.249711608887], [44.666170501709, 37.212281799316], [44.68498840332, 37.184716796875], [44.717489624024, 37.15581665039], [44.756517791748, 37.152627563477], [44.803114318848, 37.130475616455], [44.809423828125, 37.020539855957], [44.805536651611, 36.992551422119], [44.782488250733, 36.970681762696], [44.744501495362, 36.921929931641], [44.753042602539, 36.894578552246], [44.770536804199, 36.884572601319], [44.797766113281, 36.882348632813], [44.839224243164, 36.88207397461], [44.925550842285, 36.836381530762], [44.965410614014, 36.783048248291], [44.962767028809, 36.739640808105], [44.938814544678, 36.714227294922], [44.915830993653, 36.657769775391], [44.913088226319, 36.64285812378], [44.95525970459, 36.606107330323], [44.983923339844, 36.55764541626], [44.986513519287, 36.535195922852], [45.006948852539, 36.51817855835], [45.03916015625, 36.508874511719], [45.065542602539, 36.511376953125], [45.093878173828, 36.51943359375], [45.116102600098, 36.528878784179], [45.143740081787, 36.528318023682], [45.179159545898, 36.481103515625], [45.219709777832, 36.138319396973], [45.24359741211, 36.033880615235], [45.254438781739, 35.964437866211], [45.313883209229, 35.895418548584], [45.372480773926, 35.916796112061], [45.41054763794, 35.917768859863], [45.420072937012, 35.911169433594], [45.524519348145, 35.866278076172], [45.563322448731, 35.840544128418], [45.582495117188, 35.821936035156], [45.618879699707, 35.779573822022], [45.632906341553, 35.753466033936], [45.639990234375, 35.732214355469], [45.657125854492, 35.717348480225], [45.767908477784, 35.717775726319], [45.788168334961, 35.731985473633], [45.989366912842, 35.765482330322], [46.03554763794, 35.747354888916], [46.047739410401, 35.724039459229], [46.072908782959, 35.707353973389], [46.100687408447, 35.702768707276], [46.158888244629, 35.713049316406], [46.190966033936, 35.731520080567], [46.223608398438, 35.732633972168], [46.245199584961, 35.714193725586], [46.234159851074, 35.677488708497], [46.168600463867, 35.628042602539], [46.129431152344, 35.612211608887], [46.051241302491, 35.594847106934], [46.010691070557, 35.592626953125], [45.972772979736, 35.596655273438], [45.934160614014, 35.589018249511], [45.879988098145, 35.484716796875], [45.890966796875, 35.38519897461], [45.95110168457, 35.299162292481], [45.964994812012, 35.283331298828], [46.048048400879, 35.197462463379], [46.033049011231, 35.172491455079], [46.06019821167, 35.134157562256], [46.086603546143, 35.121717834472], [46.066007995606, 35.008516693115], [45.935755157471, 34.959226989746], [45.892065429688, 34.975233459472], [45.849821472168, 34.993269348145], [45.777769470215, 34.932493591309], [45.780546569824, 34.898878479004], [45.792353057861, 34.873041534424], [45.767767333984, 34.803602600098], [45.748743438721, 34.796938323975], [45.697733306885, 34.814039611817], [45.665056610107, 34.74627532959], [45.638327026367, 34.730970764161], [45.612631225586, 34.729578399658], [45.591101074219, 34.716520690918], [45.551657104492, 34.635198974609], [45.559641265869, 34.615339660645], [45.584017181397, 34.599298858643], [45.60832824707, 34.559156799317], [45.629572296143, 34.485617065429], [45.614668273926, 34.457605743408], [45.548468017578, 34.473471069336], [45.462923431397, 34.48610534668], [45.338632965088, 34.357836151123], [45.360548400879, 34.27845993042], [45.39235534668, 34.23512878418], [45.419855499268, 34.247351074219], [45.449438476563, 34.245546722413], [45.473329925537, 34.224024200439], [45.484167480469, 34.20126953125], [45.466520690918, 34.051309967041], [45.447252655029, 34.03419342041], [45.367212677002, 33.977079772949], [45.303606414795, 33.875200653076], [45.323740386963, 33.851103210449], [45.346796417236, 33.842489624023], [45.372602844238, 33.840532684327], [45.400133514404, 33.845888519287], [45.450270080567, 33.788603210449], [45.541056060791, 33.667387390137], [45.547380828857, 33.635061645508], [45.596727752686, 33.569437408447], [45.652326965332, 33.537283325195], [45.651693725586, 33.495024108887], [45.686087036133, 33.500490570069], [45.715063476563, 33.522417449952], [45.798880004883, 33.533049011231], [45.844778442383, 33.45436706543], [45.790670776367, 33.421617889405], [45.774225616455, 33.399786376953], [45.830549621582, 33.382765197754], [45.851934814453, 33.379713439942], [45.906469726563, 33.385778808594], [45.929159545899, 33.360548400879], [45.944227600098, 33.337351226807], [45.948885345459, 33.30637588501], [45.949160003662, 33.283602142334], [46.026937866211, 33.203604125977], [46.077146911621, 33.164785766602], [46.099016571045, 33.093462371826], [46.088320159912, 33.075407409668], [46.045133972168, 33.035829925538], [46.013052368164, 32.983053588867], [45.997019195557, 32.90297164917], [46.006414794922, 32.87106552124], [46.051657104492, 32.852632904053], [46.078329467774, 32.853323364258], [46.103880310059, 32.859159851075], [46.144995117188, 32.865270996094], [46.175409698486, 32.866796875], [46.204710388184, 32.863607788085], [46.273321533203, 32.851385498047], [46.314989471436, 32.840406799317], [46.350828552246, 32.825270080566], [46.393602752686, 32.802488708497], [46.457525634766, 32.75786819458], [46.753877258301, 32.698881530762], [46.795823669434, 32.678877258301], [46.817765808106, 32.669439697266], [46.847489929199, 32.653051757813], [46.940270996094, 32.580274963379], [46.957215881348, 32.566938781739], [46.982076263428, 32.543188476563], [47.0033203125, 32.523046875], [47.033601379395, 32.500547790528], [47.056100463867, 32.484716796875], [47.154435729981, 32.415830993653], [47.171937561035, 32.404440307617], [47.23277053833, 32.365824127198], [47.251378631592, 32.358465576172], [47.298875427246, 32.362211608887], [47.348859405518, 32.373495483399], [47.370965576172, 32.388601684571], [47.461240386963, 32.373808288575], [47.53790435791, 32.285551452637], [47.516084289551, 32.249452972413], [47.629434204102, 32.096937561035], [47.702684020996, 32.000593566895], [47.733190155029, 31.953184509278], [47.837495422363, 31.836660766602], [47.88694152832, 31.789163970947], [47.949159240723, 31.719717407227], [47.964440917969, 31.698606872559], [47.933328247071, 31.627771759033], [47.901101684571, 31.553049468994], [47.848603820801, 31.430277252198], [47.816659545898, 31.355551147461], [47.797212219239, 31.307772064209], [47.796380615235, 31.204443359375], [47.796380615235, 31.135431671143], [47.795823669434, 31.121660614014], [47.795541381836, 31.094160461426], [47.794709777832, 31.011385345459], [47.793878173828, 30.901110076905], [47.943322753906, 30.899717712402], [48.023881530762, 30.899439239502], [48.1, 30.897189026679], [48.1, 30.9], [48.1, 31.066666666666], [48.1, 31.233333333333], [48.1, 31.4], [48.1, 31.566666666667], [48.1, 31.733333333333], [48.1, 31.9], [48.1, 32.066666666666], [48.1, 32.233333333333], [48.1, 32.4], [48.1, 32.566666666667], [48.1, 32.733333333333], [48.1, 32.9], [48.1, 33.066666666666], [48.1, 33.233333333333], [48.1, 33.4], [48.1, 33.566666666667], [48.1, 33.733333333333], [48.1, 33.9], [48.1, 34.066666666666], [48.1, 34.233333333333], [48.1, 34.4], [48.1, 34.566666666667], [48.1, 34.733333333333], [48.1, 34.9], [48.1, 35.066666666666], [48.1, 35.233333333333], [48.1, 35.4], [48.1, 35.566666666667], [48.1, 35.733333333333], [48.1, 35.9], [48.1, 36.066666666666], [48.1, 36.433333333333], [48.1, 36.6], [48.1, 36.766666666667], [48.1, 36.933333333334], [48.1, 37.1], [48.1, 37.266666666667], [48.1, 37.433333333333], [48.1, 37.6], [48.1, 37.766666666667], [48.1, 37.933333333334], [48.1, 38.1], [48.1, 38.266666666667], [48.1, 38.433333333333], [48.1, 38.6], [48.1, 38.766666666667], [48.1, 38.933333333334], [48.1, 39.1], [48.1, 39.266666666667], [48.1, 39.433333333333], [48.1, 39.6], [48.1, 39.766666666667], [48.1, 39.807053643924],
                ],
            ],
        ];
    }
}
