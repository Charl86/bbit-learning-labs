# Shares Learning Item
## What is a security?
A security is an instrument or object that represents some sort of ownership or relationship of an entity which holds some monetary value. This may sound very ambiguous and that's because securities as a term are ambiguous. A security can be a stock like AAPL, shares that represent an ownership stake in a corporation, debt (such as a mortgage or corporate bond), or even new types of securities such as cryptocurrencies.

## What is a share?
A share is a specific type of security that denotes ownership in a public company. Owners of a corporation may choose to issue stock to raise capital. Companies divide their *stock* into *shares*, which are sold to investors.

## Instructions
We want to create a React component representation of a share. Share have names which are unique identifiers of what they represent, as well as a monetary value associated to them.

### React Component

A React component is made by creating a function that returns a JSX expression. You would export this function using the `export default` statement. Saving this into a file in the `components` directory of the NextJS project, you are able to import it and render it inside any other JSX expression.

You will also notice that in the `pages` directory of a NextJS project, you always find the expression `export default function PageComponent() {...}`. Those are components as well, and become rendered when the user hits the page endpoint associated with that component, denoted by the filename that contains said component.

An example of a complete React component goes as follows:
```jsx
export default function MyComponent() {
    return <p>Hello world!</p>
}
```

The above template only returns one HTML element. What if you wanted to return more? React does not allow to return multiple HTML elements at a time. The proposed solution to this is to return one container element that has all other elements you'd like to render (usually a `<div></div>` element or an empty tag `<></>`). This way, you can do things like:

```jsx
export default function MyComponent() {
    return (
        <div>
            <h1>My Page Title</h1>
            <p>Hello world!</p>
        </div>
    )
}
```
* Hint: you can wrap HTML elements with parentheses in order to make them multiline

For this lab, you will be creating a component called `Share`. Your component function should return an empty tag (`<></>`) of 7 `div` elements all with the value of the `className` attribute set to `border-y border-black px-6 py-4`. These `div` elements correspond to the following values of a share, for our purposes:
1. Share symbol,
2. Share price,
3. 1 day percent change,
4. Amount of shares owned,
5. Average share price,
6. Market value,
7. Your change

For each `div` element, we are going to add some dummy data to represent information about a share, although later this information would come from the backend. For now, add the following text values inside each of the `div` elements you create, respectively:
1. Share symbol: `MYSHRE`
2. Share price: `1`
3. 1 day percent change: `0.5`
4. Amount of shares owned: `1`
5. Average share price: `0.7`
6. Market value: `1`
7. Your change: `0.3`

Save your changes in a file name `Share.jsx`, inside the `components` directory. Afterwards, import your component inside the `index.jsx` file. Finally, create a component tag (e.g. `<Share />` or `<Share><Share/>`) and add it inside the `div` element of the `index.jsx` file that has a `className` value of `contents`.
* Remember that in order to use a JavaScript expression inside a JSX statement, you would need to enclose it with curly braces \{ \}
