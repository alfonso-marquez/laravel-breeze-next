import { Center } from '@mantine/core';
import { NavbarSearch } from '../NavbarSearch/NavbarSearch';
import Head from 'next/head'
// import { useAuth } from '@/hooks/auth'

const AppLayout = ({ children } : {children:any}) => {
    // const { user } = useAuth({ middleware: 'auth' })
    const styles: Object = {
        display: "flex",
        flexDirection: "row",
        backgroundColor: "#F5F5F5"
      };
    return (
        <div>
            <main style={styles}>
                <NavbarSearch />
                <section style={{width: '100%', margin: "16px", backgroundColor:"white",padding: "24px" }}>{children}</section>
            </main>
        </div>
    )
}

export default AppLayout
