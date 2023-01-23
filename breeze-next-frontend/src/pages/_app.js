import 'tailwindcss/tailwind.css'
import { MantineProvider } from '@mantine/core';

const App = ({ Component, pageProps }) =>  <MantineProvider withGlobalStyles withNormalizeCSS> <Component {...pageProps} />  </MantineProvider>

export default App
