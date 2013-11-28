<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="reset.css" type="text/css" media="screen" charset="utf-8">
<style type="text/css" media="screen">
body {
margin: 1em;
}

a {
color: #E50;
}

em {
display: block;
width: 45em;
font-style: normal;
color: #000;
}

pre {
white-space: pre-wrap;
text-transform: uppercase;
line-height: 1.7em;
color: #999;
}

ul li {
float: left;
margin-right: 2em;
}
</style>
</head>
<body>
<pre>
<strong>J. R. Carpenter "Writing Coastlines Letters" (2013)</strong>
<strong>After Christopher Strachey "Loveletters" (1952)</strong>

<?php

$sals1 = array("North Atlantic", "Writing and Erasing", "Reading and Writing", "Coming and Going", "Performing", "Shifting", "Transmitting and Receiving", "Calling and Responding", "Ever Questioning");

$sals2 = array("Briny Beaches", "Coastlines", "Communications Networks", "Legible Lines", "Locations in Memory", "Narratives", "Narrative Dialogues", "Non-Places", "Liminal Spaces", "In-Between Spaces", "Passages", "Points of Departure", "Lines of Flight", "Topics", "Topographies", "Terrains");

$adjs = array("algorithmic", "archival", "cartographic", "combinatory", "conceptual", "computational", "computer-generated", "critical", "dialogic", "digital", "digital literary", "electronic", "electromagnetic", "embodied", "haunted", "hybrid", "interdisciplinary", "iterative", "literary", "locative", "Marxist", "machinic", "mediated", "media archaeological", "multi-modal", "narrative", "performative", "performance writing", "pragmatic", "situationist", "synthetic", "shifting", "uncanny", "unhomed", "variable", "web-based");

$nouns = array("aim", "approach", "argument", "assemblage", "bibliography", "citation", "conclusion", "context", "contribution", "corpus", "chapter", "chapter outline", "critique", "dialectic", "draft", "essay", "experiment", "interest", "intervention", "iteration", "letter", "line of inquiry", "method", "objective", "paragraphy", "practice", "research", "reading", "conference paper", "mediation", "performance", "publication", "question", "quotation", "speech act", "test", "text", "transmission", "translation", "transmediation", "transmutation", "study", "subject", "thesis", "title", "utterance", "version", "work", "writing");

$advs = array("algorithmically", "analytically", "bodily", "carefully", "computationally", "creatively", "critically", "curiously", "digitally", "diligently", "eagerly", "electronically", "electromagnetically", "impatiently", "keenly", "methodically", "methodologically", "necessarily", "originally", "performatively", "physically", "playfully", "seriously", "studiously", "stylistically", "systematically", "sceptically", "scholarly", "systematically", "technically", "textually");

$verbs = array("argues", "charts", "communicates", "confuses", "confounds", "connects", "considers", "demonstrates", "describes", "engages with", "erases", "examines", "explains", "explores", "generates", "haunts", "identifies", "illustrates", "listens for", "locates", "makes public", "makes clear", "maps", "networks", "outlines", "performs", "programmes", "publishes", "reads", "re-reads", "reiterates", "researches", "receives", "resonates with", "transmits", "speaks", "states", "studies", "suggests", "thwarts", "walks along", "writes", "re-writes");

define(SHORT, 1);
define(LONG, 2);
$last = NULL;

$ll = sprintf("%s %s,\n ", rel($sals1), rel($sals2));
for($i=0; $i<5; $i++) {
if (mt_rand(0,9) < 5) {
//LONG
$optadj1 = (mt_rand(0,9) < 5) ? '' : rel($adjs);
$noun1 = rel($nouns);
$optadv = (mt_rand(0,9) < 5) ? '' : rel($advs);
$verb = rel($verbs);
$optadj2 = (mt_rand(0,9) < 5) ? '' : rel($adjs);
$noun2 = rel($nouns);

if ($last != NULL || $last == LONG) {
$concat = ".";
}

$ll .= sprintf("%s My %s %s %s %s your %s %s", $concat, $optadj1, $noun1, $optadv, $verb, $optadj2, $noun2);
$last = LONG;

} else {
//SHORT
$adj = rel($adjs);
$noun = rel($nouns);
if ($last == SHORT) {
$concat = ",";
} elseif ($last == LONG) {
$concat = ". You are";
} else {
$concat = "You are";
}

$ll .= sprintf("%s my %s %s", $concat, $adj, $noun);
$last = SHORT;
}
}
$adv = rel($advs);
$ll .= sprintf(".\n Yours %s,\n J.R.C.\n\n", $adv);

echo "<em>";
echo str_replace(' ',' ', $ll);
echo "</em>";

echo "<ul>";
echo "<li><strong>salutations1</strong>\n";
print_ra($sals1);
echo "</li>";

echo "<li><strong>salutations2</strong>\n";
print_ra($sals2);
echo "</li>";

echo "<li><strong>adjectives</strong>\n";
print_ra($adjs);
echo "</li>";

echo "<li><strong>nouns</strong>\n";
print_ra($nouns);
echo "</li>";

echo "<li><strong>adverbs</strong>\n";
print_ra($advs);
echo "</li>";

echo "<li><strong>verbs</strong>\n";
print_ra($verbs);
echo "</li>";
echo "</ul>";

//returns random value from array
function rel($arr) {
return $arr[array_rand($arr)];
}

function print_ra($arr) {
foreach ($arr as $el) {
echo "$el\n";
}
}

?>
<br clear="both">
<strong>REFERENCES</strong>
<a href="http://www.gingerbeardman.com/loveletter/">http://www.gingerbeardman.com/loveletter/</a>
<a href="https://github.com/gingerbeardman/loveletter">https://github.com/gingerbeardman/loveletter</a>
<a href="http://www.mosi.org.uk/about-us/news/mosi-writes-love-letter-to-ferranti-(1).aspx">http://www.mosi.org.uk/about-us/news/mosi-writes-love-letter-to-ferranti-(1).aspx</a>
<a href="http://grandtextauto.org/2005/08/01/christopher-strachey-first-digital-artist/">http://grandtextauto.org/2005/08/01/christopher-strachey-first-digital-artist/</a>
<a href="http://64.62.200.70/PERIODICAL/PDF/Encounter-1954oct/27-36/">http://64.62.200.70/PERIODICAL/PDF/Encounter-1954oct/27-36/</a>
<a href="http://gnoetrydaily.wordpress.com/2010/07/13/2-strachey-love-letters/">http://gnoetrydaily.wordpress.com/2010/07/13/2-strachey-love-letters/</a>
<a href="http://alpha60.de/research/muc/">http://www.alpha60.de/art/love_letters/</a>
<a href="http://www.alpha60.de/research/there_must_be_an_angel/DavidLink_MustBeAnAngel_2006.pdf">http://www.alpha60.de/research/there_must_be_an_angel/DavidLink_MustBeAnAngel_2006.pdf</a>
<a href="http://www.samplereality.com/2013/01/08/an-account-of-randomness-in-literary-computing/">http://www.samplereality.com/2013/01/08/an-account-of-randomness-in-literary-computing/</a>
</pre>
</body>
</html>

