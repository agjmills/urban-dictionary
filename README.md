# Urban Dictionary

A package to retrieve entries from Urban Dictionary

## Installation

`composer require asdfx/urban-dictionary`

## Usage

```
$urbanDictionary = new \Asdfx\UrbanDictionary\UrbanDictionary();
$result = $urbanDictionary->lookup('wat');
```

Returns:
```
Array
(
    [0] => The only proper response to something that makes absolutely no sense.
    [1] => Another way of saying what on message boards. Similar to wut
    [2] => Slang. Indicates confusion or a need for clarification. Statement/question.
    [3] => A spontaneous reaction to something that's in any way "fucked up" to the point where you "can't even"
    [4] => ‎Wat is the internet troll equivalent to what and is generally used in instances in which what simply does NOT seem to adequately portray the desired level of confusion and general whatthefuckness of the situation.
    [5] => A word, that when perfectly placed, is a powerful ally. It's like saying "What the fuck?" when you are completely and utterly dumbfounded by a concept, idea, or situation.
    [6] => Short form of "what". Is usually used by people who's synapses fire at a very slow rate. Can be used by otherwise literate people to convey a state of being utterly flabbergasted.
    [7] => What one says when they're devoid of any particular useful words. Also used for extreme confusion. Often extended. (WWWWWWAAAAAAAATTTTTTTTT)
    [8] => Thai temple, found all over Thailand. Pronounced 'waht'.
    [9] => Word used as an exclamation of utter confusion, or as an expression of shock at a story/image/whatever. 'Wut' is also acceptable, although it is more commonly used by pot smokers when they don't know what the fuck is going on
)
```
